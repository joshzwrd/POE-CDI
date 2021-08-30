<!DOCTYPE html>
<html>

<style>
    form{
        border: 1px solid;
        margin: 20px;
        padding: 10px;
        text-align: center;
    }
</style>
<body>

    <form method="post">
        <label for="name">Entrez un somme :</label>
        <input type="text" name="somme" /><br><br>
        <input type="radio" name="devise" value="euro">Conversion en Dollar ($)<br><br>
        <input type="radio" name="devise" value="dollar">Conversion en Euro (€)<br><br>
        <input type="submit" name="submit">
    </form>

    <?php

    if (isset($_POST['submit']) && !empty($_POST['somme']) && !empty($_POST['devise'])) {

        $somme = $_POST['somme'];
        $devise = $_POST['devise'];

        if ($devise == "dollar") {

            echo $somme . ' $ vaut ' . $somme * 0.9 . " €";
        } else {
            echo $somme . ' € vaut ' . $somme * 1.1 . " $";
        }
    }

    ?>

</body>

</html