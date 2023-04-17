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
        <div class="header-left">
            <a href="index.php"><img class="logo" src="./images/logo.png" alt="logo"></a>
        </div>
        <div class="header-right">
            <a href="login-page.php"><i class="fa-regular fa-user fa-xs"></i> LOGIN</a>
            <a href="index.php#menu">MENU</a>
            <button class="cart-btn"><i class="fa-solid fa-cart-shopping fa-sm"></i> MANDJE</button>
        </div>
    </header>
    <main>
        <h1>REGISTER</h1>
        <div class="register-box">
            <form action="./include/register.php" method="post">
                <label>New username</label>
                <input type="text" name="username" placeholder="Enter username" required>

                <label>New password</label>
                <input type="password" name="password" placeholder="Enter password" required>

                <label>First Name</label>
                <input type="text" name="name" placeholder="Enter your name" required>

                <input type="submit" name="submit">
            </form>
        </div>
    </main>
</body>

</html>