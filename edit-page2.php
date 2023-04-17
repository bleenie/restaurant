<?php
session_start();
if (isset($_SESSION['user']['name'])) :
    include_once('./include/edit.php');
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
            <div class="header-left"></div>
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
                    <form method="post">
                        <h2>ITEM AANPASSEN</h2>
                        <label>Naam gerecht</label>
                        <input type="text" name="name" value="<?php echo $data['name']; ?>">

                        <label>Beschrijving</label>
                        <input type="text" name="description" value="<?php echo $data['description']; ?>">

                        <label>Prijs</label>
                        <input type="text" name="price" value="<?php echo $data['price']; ?>">

                        <label>Foto</label>
                        <input type="file" name="image" value="<?php echo $data['image']; ?>">

                        <input type="submit" name="editsubmit">
                    </form>
                </div>
            </div>
        </main>
    </body>

    </html>

<?php else :
    header("location: index.php");
endif; ?>