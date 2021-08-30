<!DOCTYPE html>
<html>

<style>

form{
        border: 1px solid;
        margin: 20px;
        padding: 10px;
    }
    form table {
        width: 100%;
        padding: 20px;
    }

    img{
        height: 100px;
        width: 100px;
    }
</style>

<body>

    <form method="post">
        <table>
            <tr>
                <td><img src="./images/tupac-crop.jpg" /></td>
                <td>
                    <input type="radio" name="q1" value="1">Tupac</input><br />
                    <input type="radio" name="q1" value="2">Biggie</input><br />
                    <input type="radio" name="q1" value="3">Snoop Dogg</input><br />
                </td>
            </tr>
            <tr>
                <td><img src="./images/montre.png"/></td>
                <td>
                    <input type="radio" name="q2" value="1">Casque</input><br />
                    <input type="radio" name="q2" value="2">Téléphone</input><br />
                    <input type="radio" name="q2" value="3">Montre</input><br />
                </td>
            </tr>

            <tr>
                <td><img src="./images/imageprofil.png" /></td>
                <td>
                    <input type="radio" name="q3" value="1">Joshua</input><br />
                    <input type="radio" name="q3" value="2">Joel</input><br />
                    <input type="radio" name="q3" value="3">Jakarta</input><br />
                </td>
            </tr>
            <tr>
                <td colspan=2>
                    <input type="submit" name="submit" />
                </td>
            </tr>
        </table>
    </form>

    <?php

    $compteur = 0;


    if (isset($_POST['submit'])) {
        
        $q1 = empty($_POST["q1"]) ? "" : $_POST["q1"];
        $q2 = empty($_POST["q2"]) ? "" : $_POST["q2"];
        $q3 = empty($_POST["q3"]) ? "" : $_POST["q3"];

        if ($q1 !== "" && $q2 !== "" && $q3 !== "") {
            if ($q1 === "1") {
                $compteur++;
            }
            if ($q2 === "3") {
                $compteur++;
            }
            if ($q3 === "2") {
                $compteur++;
            }
            echo "<span align=center>Votre resultat :" . $compteur . "/3 bonne(s) réponse(s)</span>";
        } else {
            echo "<span align=center style='color:red;'>Veuillez remplir tous les champs!!</span>";
        }
    }
    ?>

</body>

</html