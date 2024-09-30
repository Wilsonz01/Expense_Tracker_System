<?php
    if(!defined('DB_SERVER')){
        include("initialize.php");
    }
?>
<?php
    // DB connection parameters
    $host = DB_SERVER;
    $username = DB_USERNAME;
    $password = DB_PASSWORD;
    $database = DB_NAME;

    $conn = new mysqli($host, $username, $password, $database);

    if($conn->connect_error){
        die('Connect Error (' . mysqli_connect_errno() . ') '. mysqli_connect_error());
    }
?>