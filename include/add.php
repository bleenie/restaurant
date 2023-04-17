<?php
include_once 'database.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $desc = $_POST['desc'];
    $price = $_POST['price'];
    $img = $_POST['img'];

    $dishadd = addItem($name, $desc, $price, $img);

    if ($dishadd == true) {
        header("location: ../add-page.php");
    }
}
