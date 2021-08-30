<?php
session_start();


if (!$_SESSION['username']) {
    header("location:login.php");
}
echo "Welcome " . $_SESSION['username'] . " !";
