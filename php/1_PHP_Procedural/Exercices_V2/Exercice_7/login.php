<?php session_start(); ?>

<!DOCTYPE html>
<html>

<body>

    <form method="post">
        <input name="username" type="text" placeholder="Nom d'utilisateur">
        <input name="password" type="password" placeholder="Mot de passe">
        <input name="submit" type="submit" value="Login">
    </form>

    <?php

    if (isset($_POST['submit'])) {

        $username = $_POST['username'];
        $password = $_POST['password'];

        $ids = [
            ['username' => 'Josh', 'password' => '111'],
            ['username' => 'Ina', 'password' => '222'],
            ['username' => 'Jakarta', 'password' => '333'],
        ];


        foreach ($ids as $id) {
            if ($id['username'] === $username && $id['password'] === $password) {
                $_SESSION['username'] = $username;
                header("location:index.php");
            }
        }
        echo "<span style='color:red'>Login invalide</span>";
    }
    ?>

</body>

</html