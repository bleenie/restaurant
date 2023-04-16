<?php
include_once './connect.php';

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM users WHERE username=:username AND password=:password");
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $password);
    $stmt->execute();
    $value = $stmt->fetch();

    if (isset($value['username'])) {
        session_start();
        $_SESSION['user'] = array(
            'username' => $value['username'],
            'name' => $value['name'],
        );
        header("location:../index.php");
    } else {
        header("location: ../login-page.php?error=Invalid username or password");
    }

} else {
    header("location: login-page.php");
    exit();
}
