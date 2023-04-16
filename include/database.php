<?php 
include_once './connect.php';

function register($username, $password, $name) {
    global $conn;
    $stmt = $conn->prepare("INSERT INTO users (username, password, name) VALUES ( :username, :password, :name)");
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $password);
    $stmt->bindParam(':name', $name);
    $stmt->execute();
    return true;
}
