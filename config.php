<?php
function openCon()
{
    $dbhost="localhost";
    $dbuser="root";
    $dbpass="passwordkent";
    $db="demo";
    $conn= new mysqli ($dbhost,$dbuser,$dbpass,$db) or die("connect failed: %s\n".$conn->error);

    return $conn;
}
function CloseCon($conn)
{  $conn-> close();
}
 ?>