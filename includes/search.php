<?php declare(strict_types=1); include("db.php") ?>
    
<?php 
    $searchingValue = null;
    if (!isset($_POST['submit']))
        return;
    else 
        $searchingValue = $_POST['search'];
?>