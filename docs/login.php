<?php 
    session_start();
    if(isset($_SESSION['name'])){
        header('Location: /index.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="login">
    <form class="login_form"action="functions.php" method="post">
        <label>Логин</label>
        <input name="login" type="text" placeholder="Введите логин">
        <label>Пароль</label>
        <input name="password" type="password" placeholder="Введите пароль">
        <input name="submit" type="submit" value="Войти">
        <p>
        Еще не зарегистрированы? - <a href="/register.php">Создать профиль</a>!
        </p>
        <?php 
            if(isset($_SESSION['message'])){
                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);
        ?>
    </form>
</body>
</html>
