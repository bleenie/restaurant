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
</head>

<body>
    <header>
        <div class="header-left"></div>
        <div class="header-right">
            <a href="login-page.php"><i class="fa-regular fa-user fa-xs"></i> LOGIN</a>
            <a href="">MENU</a>
            <a href="">CONTACT</a>
            <button class="cart-btn"><i class="fa-solid fa-cart-shopping fa-sm"></i> MANDJE</button>
        </div>
    </header>
    <main>
        <h1>LOGIN</h1>
        <div class="login-box">
            <form action="./include/login.php" method="post">
                <?php if (isset($_GET['error'])) { ?>
                    <p class="error"><?php echo $_GET['error']; ?></p>
                <?php } ?>
                <label>Username</label>
                <input type="text" name="username" placeholder="Enter username">

                <label>Password</label>
                <input type="password" name="password" placeholder="Enter password">

                <input type="submit" name="submit">
                <a href="./register-page.php">Register<a>
            </form>
        </div>
    </main>
</body>

</html>