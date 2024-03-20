<?php
$server = "127.0.0.1";
$user = "root";
$pass ="";
$db="rohancart";

$sql = new mysqli($server, $user, $pass,$db);

if($sql->connect_error){
    echo "database not coonnected";
}
else{
    // echo "db connected";
}
?>