<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "my_data_base";

$conn = mysqli_connect($servername, $username, $password, $dbname);
?>

<html>

<style>
    form {
        border: 1px solid;
        margin: 20px;
        padding: 10px;
        text-align: center;
    }

    h1 {
        text-align: center;
    }
</style>


<h1>New Book</h1>

<form method="post">
    <p>Ajouter un livre</p>

    <label for="title">Titre :</label>
    <input type="text" name="title">
    <label for="author">Auteur :</label>
    <input type="text" name="author">
    <br><br>
    <input type="submit" name="submit" value="Ajouter">
</form>

<?php



if (isset($_POST['submit'])) {

    $title = $_POST['title'];
    $author = $_POST['author'];

    if (!empty($title) && !empty($author)) {
        $sql = "INSERT INTO `books` (`title`, `author`) VALUES ('$title', '$author')";
        $result = mysqli_query($conn, $sql);
        header('Location: index.php');
    } else {
        echo "<span style=\"color:red; font-weight: bold;\"> Veuillez remplir tous les champs!</span>";
    }
}

?>

</html>