<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "my_data_base";

$conn = mysqli_connect($servername, $username, $password, $dbname);

$id = $_GET['id'];
$title = $_GET['title'];
$author = $_GET['author'];


// $sql = "UPDATE `books` SET `title` = '$title', `author` = '$author' WHERE `books`.`id` = $id ";

// mysqli_query($conn, $sql);

// if($sql){
//     echo "c'est carré";
  


// }else{
//     echo "ça marche pas le s";
// }

?>

<style>
    form {
        border: 1px solid;
        margin: 20px;
        padding: 20px;
        text-align: center;
    }

    h1 {
        text-align: center;
    }
</style>

<h1>Update</h1>

<form method="post">
    <p>Modifier un livre</p>

    <label for="title">ID :</label>
    <input type="text" value="<?php echo $id ?>">

    <label for="title">Titre :</label>
    <input type="text" name="title" value="<?php echo $title ?>">
    
    <label for="author">Auteur :</label>
    <input type="text" name="author" value="<?php echo $author ?>">

    <br><br>
    <input type="submit" name="update" value="update">
</form>



<?php

if(isset($_POST["update"])){

    $title = $_POST["title"];
    $author = $_POST["author"];

    $sql = "UPDATE `books` SET `title` = '$title', `author` = '$author' WHERE `books`.`id` = $id ";

    mysqli_query($conn, $sql); 
    header('Location: index.php');

};


?>

