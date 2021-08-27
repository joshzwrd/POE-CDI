<!DOCTYPE html>
<html>

<style>
    form input{
        margin: 10px;
    }
</style>

<body>

    <form method="post">
        <label for="name">Votre nom :</label>
        <input type="text" name="name"> <br>

        <label for="age">Votre age :</label>
        <input type="text" name="age"> <br>

        <label for="email">Votre email :</label>
        <input type="email" name="email"> <br>

        <input type="submit" name="submit" value="Ajouter">
    </form>



    <?php

    if (isset($_POST['submit'])) {

        $name = $_POST['name'];
        $age = $_POST['age'];
        $email = $_POST['email'];

        if (!empty($name) || empty($age) || empty($email)) {
            echo "<span style=\"color:red; font-weight: bold;\"> Veuillez remplir tous les champs!</span>";
        }else

        {
            echo "<span style=\"color:green; font-weight: bold;\">Les données ont bien été envoyées<br></span>";
        }
    }


    ?>

</body>

</html