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
</head>

<body>
    <header>
        <div class="header-left">
            <a href="index.php"><img class="logo" src="./images/logo.png" alt="logo"></a>
        </div>
        <div class="header-right">
            <?php
            session_start();
            if (isset($_SESSION['user']['name'])) :
            ?>
                <div class="dropdown">
                    <a href="index.php"><i class="fa-regular fa-user fa-xs" class="dropdown-link"></i> WELKOM <?php echo strtoupper($_SESSION['user']['name']) ?> </a>
                    <div class="dropdown-content">
                        <a href="./add-page.php">MENU AANPASSEN</a>
                        <a href="./include/logout.php">LOG UIT</a>
                    </div>
                </div>
            <?php else : ?>
                <a href="login-page.php"><i class="fa-regular fa-user fa-xs"></i> LOGIN</a>
            <?php endif; ?>
            <a href="index.php#menu">MENU</a>
            <button class="cart-btn"><i class="fa-solid fa-cart-shopping fa-sm"></i> MANDJE</button>
        </div>
    </header>

    <img class="banner" src="./images/banner.png" alt="banner">

    <main>
        <div class="about">
            <div class="about-text">
                <h2>OVER ONS</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam scelerisque, sapien in pellentesque posuere, lorem augue suscipit enim, in venenatis felis tellus ac tortor. Nunc a risus faucibus, sollicitudin lorem in, pharetra justo. Sed fringilla tincidunt ex. Duis in gravida diam. Donec accumsan aliquam nunc eu posuere. In hac habitasse platea dictumst. Nunc pharetra massa sit amet nulla ultrices, dictum hendrerit est venenatis. Donec quis venenatis justo.</p>
            </div>
            <div class="about-img">
                <img src="./images/about.jpg" alt="about">
            </div>
        </div>
        <div id="menu">
            <h1>ONS MENU</h1>
            <div class="menu-top">
                <div class="menu-top-title">
                    <h2>POPULAIRE GERECHTEN</h2>
                </div>
                <div class="menu-top-search"></div>
            </div>
            <div class="menu-item-box">
                <?php
                include_once './include/connect.php';

                $stmt = $conn->prepare("SELECT * FROM gerechten;");
                $stmt->execute();
                $data = $stmt->fetchAll();

                foreach ($data as $key => $value) : ?>
                    <div class="menu-item">
                        <div class="menu-item-left">
                            <p class="dish-title"> <?php echo $value['name']; ?> </p>
                            <p class="dish-description"> <?php echo $value['description']; ?> </p>
                            <p class="dish-price">€<?php echo $value['price']; ?> </p>
                        </div>
                        <div class="menu-item-right">
                            <img src="<?php echo $value['image']; ?>" alt="gerecht">
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div id="galerij">
            <h1>GALERIJ</h1>
    </main>
</body>

</html>