<?php
    ob_start();
    $host="intra.pea.co.th"; // Host name 
    $username="bridge"; // Mysql username 
    $password="bridge"; // Mysql password 
    $db_name="bridgeDB"; // Database name 

    // Connect to server and select databse.
    $db = mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
    mysql_select_db("$db_name")or die("cannot select DB");
    var_dump($db);
    ob_end_flush();
?>

