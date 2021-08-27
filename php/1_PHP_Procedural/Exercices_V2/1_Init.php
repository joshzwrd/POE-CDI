<!DOCTYPE html>
<html>

    <body>

        <form method="post">
            <input type="text" name="name">
            <input type="submit" name="submit">
        </form>

        <?php
        # POST VARIABLE :
        if (isset($_POST['submit'])) {
            if (!empty($_POST['name'])){
                echo "Hello " . $_POST['name'] . " !";
            }
            else{
                echo "ya rien le s";
            }
        }
        ?>

    </body>
</html