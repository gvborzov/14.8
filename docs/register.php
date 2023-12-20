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
    <title>Создание аккаунта</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="reg">
    <form class="reg_form" action="functions.php" method="post">
        <label>Имя</label>
        <input name="name" type="text" placeholder="Введите имя">
        <label>Логин</label>
        <input name="login" type="text" placeholder="Введите логин">
        <label>Пароль</label>
        <input name="password" type="password" placeholder="Введите пароль">
        <label>Подтверждение пароля</label>
        <input name="password_confirm" type="password" placeholder="Введите пароль ещё раз">
        <input name="submit" type="submit" value="Зарегистрироваться">
        <p>
        У вас уже есть аккаунт? - <a href="/login.php">Войти</a>!
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
