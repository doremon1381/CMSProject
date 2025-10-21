<?php declare(strict_types=1); include("db.php") ?>
    
<?php 
    if (!isset($_POST['submit']))
        echo "ERROR";

    $searchingValue = $_POST['search'];
?>