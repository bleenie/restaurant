<?php
include_once './database.php';

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $name = $_POST['name'];

    $registered = register($username, $password, $name);

    if ($registered == true) {
        header("location: ../login-page.php");
    }
}
