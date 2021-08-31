<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "my_data_base";

$conn = mysqli_connect($servername, $username, $password, $dbname);

$id = $_GET['rn'];
$sql = " DELETE FROM `books` WHERE `books`.`id` = '$id' ";

mysqli_query($conn, $sql);

if($sql){
    echo "c'est carré";


}else{
    echo "ça marche pas le s";
}

?>



