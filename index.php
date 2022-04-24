<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная</title>

    <!-- Фавиконка -->
    <link rel="apple-touch-icon" sizes="180x180" href="/res/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/res/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/res/favicon/favicon-16x16.png">
    <link rel="manifest" href="/res/favicon/site.webmanifest">


    <!-- Bootstrap -->
    <link rel="stylesheet" href="/styles/bootstrap.min.css">
    <link rel="stylesheet" href="/js/bootstrap.bundle.js">


    <!-- CSS конкретно для этой страницы -->
    <link rel="stylesheet" href="/styles/custom/login.css">
    <link rel="stylesheet" href="/styles/custom/styles.css">
</head>

<body>

    <?php
    require_once '/home/users/o/osinvladislav/domains/aloevera.thevladoss.site/navbar.php';

    ?>

    <div class="d-flex flex-column mt-5 justify-content-end">
        <div class="d-inline-flex">
            <div class="d-flex w-50 flex-column justify-content-center">
                <div class="container w-50">
                    <h1 class="mb-4"><b><a style="color: #1A5B20">Seed</a><a style="color: #45D08DCC">Care</a></b></h1>
                    <h3 class="mb-2"><b>Уход за вашими растениями</b></h3>
                    <p>Превратите выращивание растений в интересное время провождение, которое будет приносить Вам истинное удовольствие</p>
                    <a href="<?=(isset($_COOKIE['login'])) ? 'https://aloevera.thevladoss.site/personal_page/' : 'https://aloevera.thevladoss.site/login/'?>" class="btn btn-lg text-light" style="background: #45D08DCC; width: 12rem">Начать</a>
                </div>
            </div>

            <div class="d-flex w-50 justify-content-start">
                <img src="../res/woman.png" style="height: 400px;">
            </div>
        </div>


        <div class="d-inline-flex">
            <div class="d-flex w-50 flex-column justify-content-center">
                <div class="d-flex container justify-content-center">
                    <img src="../res/child.png" class="mt-5" style="height: 400px">
                </div>
            </div>

            <div class="d-flex w-50 flex-column justify-content-center">
                <h1><b>Благодаря нашему сервису Вы сможете:</b></h1>
                <p class="mt-2">Увеличить свой урожай на 37%</p>
                <p>Уменьшить затраты на выращивание своего огорода на 40%</p>
                <p>Каждый день радоваться своим растениям </p>
            </div>
        </div>


        <div class="d-flex flex-column justify-content-center container w-50 mt-5" style="margin-bottom: 56px">
            <h2><b>Почему это важно?</b></h2>
            <p>Мы любуемся красотой растений в разных местах: в лесу, в парках, скверах, дома. Однако растения бывают не только красивыми, но и полезными.
                Без растений невозможна жизнь. Ведь они образуют кислород — газ, который необходим для дыхания всем живым существам.
                Хвойные растения насыщают воздух веществами — фитонци́дами, которые уничтожают вредные бактерии и подавляют их развитие. Поэтому важно поддерживать с растениями дружесие отношения.</p>
        </div>
    </div>
    <footer>
        <p>Разработано в рамках хакатона TulaHack2022</p>
        <p>© Aloe Vera, 2022</p>
    </footer>

</body>

</html>