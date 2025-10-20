<?php declare(strict_types=1); ?>
<?php 
  $db = array();

  $db['db_host'] = 'localhost:3306';
  $db['db_user'] = 'root';
  $db['db_password'] = '*Tinhte2025';
  $db['db_name'] = 'phpTest';

  foreach($db as $key => $value){
    // define to create constant in php
    define(strtoupper($key), $value);
  }

  $connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

  // if ($connection)
  //   echo "CONNECTED!";
?>