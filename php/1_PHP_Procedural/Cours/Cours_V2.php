<!DOCTYPE html>
<html lang="en">

<!-- Variables Superglobales -->

<form method="post">
    <input type="text" name="name">
    <input type="submit" name="submit">
</form>
<?php

# POST VARIABLE :

if (isset($_POST['submit'])) {
    if (!empty($_POST['name'])) {
        echo "Hello " . $_POST['name'] . " !";
    }
}

?>

<!-- N°2 -->

<?php

# GET VARIABLE :
# URI EXAMPE : [http://localhost/myfile.php?name=Luka]
if (!empty($_GET['name'])) {
    echo "Hello " . $_GET['name'] . " !";
}
?>

<!-- N°3 -->

<form method="post">
    <input type="text" name="name">
    <input type="submit" name="submit">
</form>

<?php

# $_SERVER['REQUEST_METHOD'] :
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!empty($_POST['name'])) {
        echo "Hello " . $_POST['name'] . " !";
    }
}

?>


<!-- N°4 -->


<?php

# COOKIE VARIABLE :
$cookie_name = "user";
$cookie_value = "Leo Paul";

setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>
<html>

<body>

    <?php

    if (!isset($_COOKIE[$cookie_name])) {
        echo "Cookie named '" . $cookie_name . "' is not set!";
    } else {
        echo "Cookie '" . $cookie_name . "' is set!<br>";
        echo "Value is: " . $_COOKIE[$cookie_name];
    }

    # To Delete a Cookie, just set the expiration date to one hour ago
    // setcookie("user", "", time() - 3600);
    ?>
</body>

</html>



<!-- N°5 -->



<?php


# SESSION VARIABLE :

# Start the 
session_start();

?>
<!DOCTYPE html>
<html>

<body>
    <?php

    # Set session variables
    $_SESSION["user"] = "Leo Paul";
    echo "Session variables are set.";

    # remove all session variables
    session_unset();

    # destroy the session
    session_destroy();
    ?>
</body>

</html>


</html>