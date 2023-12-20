<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="eng">
<head>
    <meta charset="UTF-8">
    <title>SPA Салон (Демо)</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <header class="header">
            <?php
            if(!isset($_SESSION['name'])) {
                echo '<a class="login_reg" href="login.php">Войти/Зарегистрироваться</a>';
            }else {
                    echo '<h3>Приветствуем ' . $_SESSION['name'] . '</h3>';
                    echo '<a class="exit" href="logout.php">Выход</a>';
            }
            ?>
        </header>
    </div>
    <section>
        <div class="container">
            <?php 
                if(isset($_SESSION['name'])){
            ?>
            <h3>Укажите дату рождения: </h3>
            <form action="functions.php" method="post">
                <label>День</label>
                <input name="day" type="text" placeholder="Введите день">
                <label>Месяц</label>
                <select name="month">
                    <option value="01">Январь</option>
                    <option value="02">Февраль</option>
                    <option value="03">Март</option>
                    <option value="04">Апрель</option>
                    <option value="05">Май</option>
                    <option value="06">Июнь</option>
                    <option value="07">Июль</option>
                    <option value="08">Август</option>
                    <option value="09">Сентябрь</option>
                    <option value="10">Октябрь</option>
                    <option value="11">Ноябрь</option>
                    <option value="12">Декабрь</option>
                </select>
                <input class="sign_up" name="submit" type="submit" value="Проверить">
            </form>
            <?php 
                }
                if(isset($_SESSION["days"])){
                    if($_SESSION["days"] == 0){
                        echo '<h3>С днем рождения! Дарим вам скидку 5% на все услуги</h3>';
                    }else{
                        echo '<h3>До вашего дня рождения осталось ' . $_SESSION['days'] .  ' дней</h3>';
                    }
                }
                if(isset($_SESSION['name'])){
                    $midnight = date("Y-m-d 00:00:00", strtotime('+ 1 day' . $_SESSION['date']));
                    $interval = date_create($midnight)->diff(date_create(date("Y-m-d H:i:s", time())));

                    echo "<h3> До истечения персональной скидки осталось: " . $interval->format("%h") . " ч. " . $interval->format("%i") . " мин. " . $interval->format("%s") . " сек.</h3>";
                }
            ?>
            <img class="title" src="pictures/title.jpg" alt="Ошибка загрузки фото">
            <div class="section">
                <a class="category" href="#">
                <img class="category_img" src="pictures/1.jpg" alt="Ошибка загрузки фото">
                    <h4 class="category_title">
                        Массаж для тела и души
                    </h4>
                    <p class="category_text">
                        Полный массаж тела в комнате на 35 этаже с панорамным видом на Москву.
                    </p>
                    <p class="duration">Длительность - 2 часа</p>
                    <?php 
                        if(isset($_SESSION['days']) && $_SESSION['days'] == 0){
                            echo '<p class="cost">Стоимость - <s>4000</s> &#8381 <span>3800 &#8381</span></p>';
                        }else{
                            echo '<p class="cost">Стоимость - 4000 &#8381</p>';
                        }
                    ?>
                    <button class="sign_up">Записаться</button>
                    <button class="more_detail">Подробнее</button>
                </a>
                <a class="category" href="#">
                <img class="category_img" src="pictures/4.jpg" alt="Ошибка загрузки фото">
                    <h4 class="category_title">
                        Шоколадное обертывание
                    </h4>
                    <p class="category_text">
                        Расслабляющая и тонизирующая кожу процедура с приятным добавлением шоколадной ароматерапии.
                    </p>
                    <p class="duration">Длительность - 2 часа</p>
                    <?php 
                        if(isset($_SESSION['days']) && $_SESSION['days'] == 0){
                            echo '<p class="cost">Стоимость - <s>2000</s> &#8381 <span>1900 &#8381</span></p>';
                        }else{
                            echo '<p class="cost">Стоимость - 2000 &#8381</p>';
                        }
                    ?>
                    <button class="sign_up">Записаться</button>
                    <button class="more_detail">Подробнее</button>
                </a>
                <a class="category" href="#">
                <img class="category_img" src="pictures/5.jpg" alt="Ошибка загрузки фото">
                    <h4 class="category_title">
                        Стоунтерапия
                    </h4>
                    <p class="category_text">
                        Массаж тела с применением горячих вулканических камней и приятных ароматических масел.
                    </p>
                    <p class="duration">Длительность - 1.5 часа</p>
                    <?php 
                        if(isset($_SESSION['days']) && $_SESSION['days'] == 0){
                            echo '<p class="cost">Стоимость - <s>6000</s> &#8381 <span>5700 &#8381</span></p>';
                        }else{
                            echo '<p class="cost">Стоимость - 6000 &#8381</p>';
                        }
                    ?>
                    <button class="sign_up">Записаться</button>
                    <button class="more_detail">Подробнее</button>
                </a>
                <a class="category" href="#">
                <img class="category_img" src="pictures/6.jpg" alt="Ошибка загрузки фото">
                    <h4 class="category_title">
                        Парный массаж
                    </h4>
                    <p class="category_text">
                        Полное расслабление для вас и вашей второй половинки. Роскошный подарок на любой праздник.
                    </p>
                    <p class="duration">Длительность - 2 часа</p>
                    <?php 
                        if(isset($_SESSION['days']) && $_SESSION['days'] == 0){
                            echo '<p class="cost">Стоимость - <s>7000</s> &#8381 <span>6650 &#8381</span></p>';
                        }else{
                            echo '<p class="cost">Стоимость - 7000 &#8381</p>';
                        }
                    ?>
                    <button class="sign_up">Записаться</button>
                    <button class="more_detail">Подробнее</button>
                </a>
                <a class="category" href="#">
                <img class="category_img" src="pictures/2.jpg" alt="Ошибка загрузки фото">
                    <h4 class="category_title">
                        Водные процедуры (Start)
                    </h4>
                    <p class="category_text">
                        Доступ к бассейну с расслабляющей музыкой, баром и зонами для отдыха.
                    </p>
                    <p class="duration">Длительность - 3 часа</p>
                    <?php 
                        if(isset($_SESSION['days']) && $_SESSION['days'] == 0){
                            echo '<p class="cost">Стоимость - <s>1000</s> &#8381 <span>950 &#8381</span></p>';
                        }else{
                            echo '<p class="cost">Стоимость - 1000 &#8381</p>';
                        }
                    ?>
                    <button class="sign_up">Записаться</button>
                    <button class="more_detail">Подробнее</button>
                </a>
                <a class="category" href="#">
                <img class="category_img" src="pictures/3.jpg" alt="Ошибка загрузки фото">
                    <h4 class="category_title">
                        Водные процедуры (Max)
                    </h4>
                    <p class="category_text">
                        Доступ к бассейну, джакузи, нескольким видам саун.
                    </p>
                    <p class="duration">Длительность - 3 часа</p>
                    <?php 
                        if(isset($_SESSION['days']) && $_SESSION['days'] == 0){
                            echo '<p class="cost">Стоимость - <s>3000</s> &#8381 <span>2850 &#8381</span></p>';
                        }else{
                            echo '<p class="cost">Стоимость - 3000 &#8381</p>';
                        }
                    ?>
                    <button class="sign_up">Записаться</button>
                    <button class="more_detail">Подробнее</button>
                </a>
            </div>
        </div>
    </section>
</body>
</html>