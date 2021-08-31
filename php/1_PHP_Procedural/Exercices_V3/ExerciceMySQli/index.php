a<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "my_data_base";

$conn = mysqli_connect($servername, $username, $password, $dbname);

$sql = "SELECT id, title, author FROM books";

$result = mysqli_query($conn, $sql);

$rows = $result->fetch_all(MYSQLI_ASSOC);
var_dump($rows);
?>

<table border="1" width="100%">
    <h1>Liste des livres</h1>
    <tr>
        <th>ID</th>
        <th>TITLE</th>
        <th>AUTHOR</th>
    </tr>

    <!-- <td><input type="submit" name="modify" value="Modifier"></td>
<td><input type="submit" name="delete" value="Supprimer"></td> -->
    <?php

    foreach ($rows as $row) {

        echo "<tr align=\"center\">";
        
        echo 
        "<td>" . $row["id"] . "</td>
        <td>" . $row["title"] . "</td>
        <td>" . $row["author"] . "</td>

        <td><a href='./delete.php?rn=$row[id]'>Delete</a></td>
        </tr>
        ";
    }

    ?>

</table>

<a href="./insert.php">Ajouter un livre</a>
