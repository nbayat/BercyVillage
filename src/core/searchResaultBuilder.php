<?php
$searchResaultHtml = '';
if (isset($_GET['searchKey'])){
    require_once '/Users/nima/dev/leProjet/src/core/mysql_connection.php';
    require_once 'clear_input.php';
    require_once 'itemBuilder.php';
    $conn = getConnection();
    $conn->select_db('leProjet');
    $searchInput = clear_input($_GET['searchKey']);
    $result = mysqli_query($conn, "SELECT * FROM restaurants where nom = '$searchInput'");
    while ($row = mysqli_fetch_array($result)) {
        $searchResaultHtml .= returnItem($row['img__Path'], intval($row['note']), $row['nom'], $row['adress']);
    }
    if ($result->num_rows > 0){
        for ($i = 0; $i < 3 - $result->num_rows % 3; $i++){
            $searchResaultHtml .= "<div class='cardItemEmpty'></div>";
        }
    }
}

function getResault(){
    global $searchResaultHtml;
    return $searchResaultHtml;
}
?>
