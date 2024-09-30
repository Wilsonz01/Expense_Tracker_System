<?php
    if (session_status() !== PHP_SESSION_ACTIVE) {
        session_start();
    }

    // Sets default timezome to +8 GMT
    date_default_timezone_set("Asia/Manila");

    // This is offline hosting configuration.
    if(!defined('is_mobile')) define('is_mobile', is_numeric(strpos(strtolower($_SERVER["HTTP_USER_AGENT"]), "mobile"))); // Checks if end user is mobile or not
    if(!defined('date')) define('date', date("Y-m-d h:i:s A")); // Date Arranged by  Year-Month-Day Hours-Minutes-Seconds AM/PM
    if(!defined('base_url')) define('base_url','http://localhost/(LIT)systemProject/'); // Link address
    if(!defined('base_app')) define('base_app', str_replace('\\','/',__DIR__).'/' ); // Directory
    if(!defined('DB_SERVER')) define('DB_SERVER',"localhost"); // Database Server
    if(!defined('DB_USERNAME')) define('DB_USERNAME',"root"); // Database Username
    if(!defined('DB_PASSWORD')) define('DB_PASSWORD',""); // Database Password
    if(!defined('DB_NAME')) define('DB_NAME',"ems"); // Database Name
?>