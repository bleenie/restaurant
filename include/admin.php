<?php
include_once 'database.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $desc = $_POST['desc'];
    $price = $_POST['price'];
    $img = $_POST['img'];

    $dishadd = addItem($name, $desc, $price, $img);

    if ($dishadd == true) {
        header("location: ../admin-page.php");
    }
}


$stmt = $conn->prepare("SELECT * FROM gerechten WHERE id = :id");
$stmt->execute(['id' => $_GET['id']]);
$data = $stmt->fetch();

if (isset($_POST['editsubmit'])) {
    $stmt = $conn->prepare("UPDATE gerechten SET
                    name = :name,
                    description = :description,
                    price = :price,
                    image = :img
                    WHERE id = :id
                    ");
    $stmt->bindParam(':name', $_POST['name']);
    $stmt->bindParam(':description', $_POST['description']);
    $stmt->bindParam(':price', $_POST['price']);
    $stmt->bindParam(':img', $_POST['image']);
    $stmt->bindParam(':id', $data['id']);
    $stmt->execute();
}
