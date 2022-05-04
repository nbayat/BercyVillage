<?php

?>

<nav class="navbar">
    <a href="/src/views/landingPage.php"><span class="material-icons-round">home</span></a>
    <form class="searchSection" method="get" action="/src/views/search.php">
        <input type="text" placeholder="Cherchez un restaurant,..." name="searchKey" required>
        <input type="submit" value="Aller" name="search">
    </form>
    <a href="/src/views/profile.php"><span class="material-icons-round">account_circle</span></a>
    <a href="/src/core/deconnection.php"><span class="material-icons-round">logout</span></a>
</nav>
