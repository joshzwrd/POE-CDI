<?php

class User
{

    public string $lastname;
    public string $firstname;

    function __construct($l, $f)
    {
        $this->lastname = $l;
        $this->firstname = $f;
    }

    static function dbConnecte()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "my_data_base";

        $conn = new mysqli($servername, $username, $password, $dbname);
        return $conn;
    }

    function addUser()
    {
        $conn = self::dbConnecte();

        $sql  = "INSERT INTO `users` (`lastname`,`firstname` ) 
                    VALUES ('$this->lastname', '$this->firstname')";

        $conn->query($sql);
    }

    static function getUsers()
    {
        $conn = self::dbConnecte();

        $sql  = "SELECT * FROM `users`";

        $result = $conn->query($sql);

        $rows = $result->fetch_all(MYSQLI_ASSOC);

        echo "<tr align=\"center\">";

        foreach ($rows as $row) {
            echo "<td>" . $row["id"] . "</td>
            <td> " . $row["lastname"] . "</td>
            <td> " . $row["firstname"] . "</td>
        </tr>";
        }
    }

    static function getUserById(int $id)
    {
        $conn = self::dbConnecte();

        $sql  = "SELECT * FROM `users` WHERE id = $id" ;

        $result = $conn->query($sql);

        $rows = $result->fetch_all(MYSQLI_ASSOC);
        foreach ($rows as $row) {
            echo $row["id"] . " " . $row["lastname"] . " " . $row["firstname"] . "<br>";
        }

    }

    static function deleteUserById(int $id)
    {
        $conn = self::dbConnecte();

        $sql  = " DELETE FROM `users` WHERE `users`.`id` = '$id' " ;

        $conn->query($sql);

    }

    static function updateUserById(int $id)
    {

        $conn = self::dbConnecte();

        $sql  = "UPDATE `users` SET `lastname` = 'TestNom1', `firstname` = 'testprenom1' WHERE `users`.`id` = $id " ;

        $conn->query($sql);

    }
}

// User::getUsers();
// User::getUserById(2);
// User::deleteUserById(9);
User::updateUserById(5);


// $user = new User ("Ina","Jakarta");
// $user->addUser();

?>

<html>

<table border="1" width="100%">
    <h1>Liste des Utilisateurs</h1>
    <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Prénom</th>
    </tr>

    <?php

    User::getUsers();

    ?>

</table>


<style>
    table{
        text-align: center;
    }

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

<form method="post">
    <p>Ajouter un utilisateur</p>

    <label for="lastname">Nom :</label>
    <input type="text" name="lastname">
    <label for="firstnamer">Prénom :</label>
    <input type="text" name="firstname">
    <br><br>
    <input type="submit" name="submit" value="Ajouter">
</form>

</html>

<?php

if (isset($_POST['submit'])) {

    $lastname = $_POST['lastname'];
    $firstname = $_POST['firstname'];

    if (!empty($lastname) && !empty($firstname)) {

        $user = new User("$lastname", "$firstname");
        echo $user->addUser();
    } else {
        echo "<span style=\"color:red; font-weight: bold;\"> Veuillez remplir tous les champs!</span>";
    }
}
