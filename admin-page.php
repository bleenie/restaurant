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
                        <a href="./admin-page.php">MENU AANPASSEN</a>
                        <a href="./include/logout.php">LOG UIT</a>
                    </div>
                </div>
                <a href="">MENU</a>
                <a href="">CONTACT</a>
                <button class="cart-btn"><i class="fa-solid fa-cart-shopping fa-sm"></i> MANDJE</button>
            </div>
        </header>
        <main>
            <h1>MENU AANPASSEN</h1>
            <div class="admin-box">
                <div class="admin-box-top">
                    <button onclick="showAddForm()" class="btn">ITEM TOEVOEGEN</button>
                    <button onclick="showChangeForm()" class="btn">ITEM AANPASSEN</button>
                    <button onclick="showDeleteForm()" class="btn">ITEM VERWIJDEREN</button>
                </div>
                <div class="admin-box-bottom">
                    <form id="addform" action="./include/admin.php" method="post">
                        <h2>ITEM TOEVOEGEN</h2>
                        <label>Naam gerecht</label>
                        <input type="text" name="dishname" placeholder="Nieuwe naam" required>

                        <label>Beschrijving</label>
                        <input type="text" name="dishdesc" placeholder="Nieuwe beschrijving" required>

                        <label>Prijs</label>
                        <input type="text" name="dishprice" placeholder="Nieuwe prijs" required>

                        <label>Foto</label>
                        <input type="image" name="dishimg" placeholder="Nieuwe foto" required>

                        <input type="submit" name="submit">
                    </form>
                    <form id="changeform" action="./include/admin.php" method="post">
                        <h2>ITEM AANPASSEN</h2>
                        <label>New username</label>
                        <input type="text" name="regusername" placeholder="Enter username" required>

                        <label>New password</label>
                        <input type="password" name="regpassword" placeholder="Enter password" required>

                        <label>First Name</label>
                        <input type="text" name="regname" placeholder="Enter your name" required>

                        <input type="submit" name="regsubmit">
                    </form>
                    <form id="deleteform" action="./include/admin.php" method="post">
                        <h2>ITEM VERWIJDEREN</h2>
                        <label>New username</label>
                        <input type="text" name="regusername" placeholder="Enter username" required>

                        <label>New password</label>
                        <input type="password" name="regpassword" placeholder="Enter password" required>

                        <label>First Name</label>
                        <input type="text" name="regname" placeholder="Enter your name" required>

                        <input type="submit" name="regsubmit">
                    </form>
                </div>
            </div>
        </main>
    </body>

    </html>

<?php else :
    header("location: index.php");
endif; ?>