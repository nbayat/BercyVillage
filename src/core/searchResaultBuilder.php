<?php

// ce script serve pour faire la recherche selon plusieurs critéres
// puis il crée html nécessaire

$searchResaultHtml = '';
if (isset($_GET['searchKey'])){
    require_once '../core/mysql_connection.php';
    require_once 'clear_input.php';
    require_once 'itemBuilder.php';
    $conn = getConnection();
    $conn->select_db('leProjet');
    // !!!!!!!!!!!
    // !!!!!!!!!!!
    // !!!!!!!!!!!
    // Attention, nous avons besoin les chars > < = donc on ne peut pas sanitizer l'input par ma methode
    // clear_input definite dans src/core
    // donc on peut avoir injection html ou xml mais on vas verifier pour sql injection
    // en realité le projet sera plus complexe et il faut sanitizer le input contre les scripts
    // par exemple un XSS <script>alert(1)</script> mais cette partie n'est pas à php
    // il existe deja plusieurs methodes JS pour cela qui n'est pas le but du cours
    // donc on peut ignorer injection de JS ou HTML parce qu'on l'utilise uniquement
    // pour cette query SQL
    // !!!!!!!!!!!
    // !!!!!!!!!!!
    // !!!!!!!!!!!
    $searchInput = $conn->real_escape_string( $_GET['searchKey']); // Dangereux !!!!
    // !!!!!!!!!!!
    // !!!!!!!!!!!
    // !!!!!!!!!!!
    $words = preg_replace('/[0-9]+/', '', $searchInput);
    $words = trim($words);
    foreach (explode(' ',$words) as $word){
        if (!str_contains($word, 'note')){
            $query = "SELECT * FROM restaurants where nom LIKE '%{$word}%'";
             //$query = "SELECT * FROM restaurants where nom LIKE '%{$word}%' OR adress LIKE '%$word%'";
            // voir si existe un num
            $noteInput = (int) filter_var($searchInput, FILTER_SANITIZE_NUMBER_INT);
            // voir si c'est un note et identifier la condition
            if ($noteInput != 0 && str_contains($searchInput, 'note')){

                if (str_contains($searchInput, '>')) {
                    $query .= "AND note >= $noteInput OR adress LIKE '%$word%' AND note >= $noteInput";
                }
                else if (str_contains($searchInput, '<')) {
                    $query .= "AND note <= $noteInput OR adress LIKE '%$word%' AND note <= $noteInput";
                }
                else if (str_contains($searchInput, '=')) {
                    echo "ok";
                    $query .= "AND note = $noteInput OR adress LIKE '%$word%' AND note = $noteInput";
                }
            }
            $result = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_array($result)) {
                $searchResaultHtml .= returnItem($row['img__Path'], intval($row['note']), $row['nom'], $row['adress']);
            }
            if ($result->num_rows > 0){
                for ($i = 0; $i < 3 - $result->num_rows % 3; $i++){
                    $searchResaultHtml .= "<div class='cardItemEmpty'></div>";
                }
            }
        }
    }
}
// export le resultant
function getResault(){
    global $searchResaultHtml;
    return $searchResaultHtml;
}
?>
