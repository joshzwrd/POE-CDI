<!DOCTYPE html>
<html>

<body>

    <form method="post">


        <input type="text" name="val1">

        <select name="operation">
            <option value="add" >Addition</option>
            <option value="sous" >Soustraction</option>
            <option value="mul">Multiplication</option>
            <option value="div">Division</option>
        </select>

        <input type="text" name="val2">

        <input type="submit" name="submit" value="Envoyer">



    </form>


    <?php


    if (isset($_POST['val1']) && isset($_POST['val2']) && isset($_POST['operation'])) {

        $val1 = $_POST['val1'];
        $val2 = $_POST['val2'];
        $operation = $_POST['operation'];

        if (is_numeric($val1) &&  is_numeric($val2)) {
            if ($operation != null) {
                switch ($operation) {
                    case "add":
                        $result = $val1 + $val2;
                        break;
                    case "sous":
                        $result = $val1 - $val2;
                        break;
                    case "mul":
                        $result = $val1 * $val2;
                        break;
                    case "div":
                        $result = $val1 / $val2;
                        break;
                }
                echo ("Résultat de Calcul:<b> $result</b>");
            }
        } else {
            echo ("Données invalide, veillez ré-essayer ");
        }
    }

    ?>

</body>

</html