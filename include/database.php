<?php
include_once 'connect.php';

function register($username, $password, $name)
{
    global $conn;
    $stmt = $conn->prepare("INSERT INTO users (username, password, name) VALUES ( :username, :password, :name)");
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $password);
    $stmt->bindParam(':name', $name);
    $stmt->execute();
    return true;
}

function addItem($name, $desc, $price, $img)
{
    global $conn;
    $stmt = $conn->prepare("INSERT INTO gerechten (name, description, price, image) VALUES (:name, :desc, :price, :img)");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':desc', $desc);
    $stmt->bindParam(':price', $price);
    $stmt->bindParam(':img', $img);
    $stmt->execute();
    return true;
}
