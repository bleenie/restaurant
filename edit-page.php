<?php
session_start();
if (isset($_SESSION['user']['name'])) :
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./css/style.css">
        <link rel="stylesheet" href="./css/header.css">
        <link rel="stylesheet" href="./css/form.css">
        <link rel="stylesheet" href="./css/table.css">
        <script src="https://kit.fontawesome.com/21918895c4.js" crossorigin="anonymous"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=K2D:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <title>Document</title>
        <script src="./admin.js" defer></script>
    </head>

    <body>
        <header>
            <div class="header-left">
                <a href="index.php"><img class="logo" src="./images/logo.png" alt="logo"></a>
            </div>
            <div class="header-right">
                <div class="dropdown">
                    <a href="index.php"><i class="fa-regular fa-user fa-xs" class="dropdown-link"></i> WELKOM <?php echo strtoupper($_SESSION['user']['name']) ?> </a>
                    <div class="dropdown-content">
                        <a href="./add-page.php">MENU AANPASSEN</a>
                        <a href="./include/logout.php">LOG UIT</a>
                    </div>
                </div>
                <a href="index.php#menu">MENU</a>
                <button class="cart-btn"><i class="fa-solid fa-cart-shopping fa-sm"></i> MANDJE</button>
            </div>
        </header>
        <main>
            <h1>MENU AANPASSEN</h1>
            <div class="admin-box">
                <div class="admin-box-top">
                    <a href="add-page.php" class="btn">ITEM TOEVOEGEN</a>
                    <a href="edit-page.php" class="btn">ITEM AANPASSEN</a>
                    <a href="delete-page.php" class="btn">ITEM VERWIJDEREN</a>
                </div>
                <div class="admin-box-bottom">
                    <table>
                        <tr>
                            <th>Naam gerecht</th>
                            <th>Beschrijving</th>
                            <th>Prijs</th>
                            <th>Foto</th>
                        </tr>
                        <?php
                        include_once './include/connect.php';

                        $stmt = $conn->prepare("SELECT * FROM gerechten;");
                        $stmt->execute();
                        $data = $stmt->fetchAll();
                        foreach ($data as $key => $value) : ?>
                            <tr>
                                <td><?php echo $value['name']; ?></td>
                                <td><?php echo $value['description']; ?></td>
                                <td><?php echo $value['price']; ?></td>
                                <td><?php echo $value['image']; ?></td>
                                <td><a href="edit-page2.php?id=<?php echo $value['id']; ?>" name="edit">EDIT</a>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </main>
    </body>

    </html>

<?php else :
    header("location: index.php");
endif; ?>