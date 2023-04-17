<?php
include_once 'connect.php';

if (isset($_GET['id'])) {
    $stmt = $conn->prepare("DELETE FROM gerechten WHERE id=:id");
    $stmt->bindParam(':id', $_GET['id']);
    $stmt->execute();

    header("location:../delete-page.php");
}
