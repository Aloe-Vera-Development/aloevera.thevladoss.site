<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

    <link rel='stylesheet prefetch'
        href='http://fonts.googleapis.com/css?family=Roboto:400|Roboto+Condensed:400|Fjalla+One:400'>
    <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>

    <link rel="stylesheet" href="css/style.css">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Личный кабинет</title>

    <!-- Фавиконка -->
    <link rel="apple-touch-icon" sizes="180x180" href="../res/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../res/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../res/favicon/favicon-16x16.png">
    <link rel="manifest" href="../res/favicon/site.webmanifest">


    <!-- Bootstrap -->
    <link rel="stylesheet" href="../styles/bootstrap.min.css">


    <!-- CSS конкретно для этой страницы -->
    <link rel="stylesheet" href="../styles/custom/styles.css">
    <link rel="stylesheet" href="../styles/custom/personal_page.css">
    <link rel="stylesheet" href="../styles/custom/calcal.css">

    <!-- Календарь -->

</head>

<body style="background: #FAFAFA;">
    <main style="display:flex;
    flex-direction:column;
    justify-content:center;
    align-items:center;">
        <?php
            require_once '/home/users/o/osinvladislav/domains/aloevera.thevladoss.site/navbar.php';
        ?>
        <!-- <div class="navbar_wrapper">
            <nav class="navbar_seedcare navbar navbar-expand-lg navbar-light bg-light">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarTogglerDemo" aria-controls="navbarTogglerDemo" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="#">
                    <img src="" alt="" srcset="">
                </a>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo" style="justify-content:center;">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Календарь</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Мои Растения</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Настройки</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Мой Профиль</a>
                        </li>

                    </ul>

                </div>
                <div class="profile_mini">
                    <a href="#">
                        <img src="../res/avatar.png" alt="аватар">
                        РЛ
                    </a>
                </div>
            </nav>
        </div> -->
        <div style="width: 20px;height: 20vh;"></div>
        <div class="input-group_wrapper" style="height:60px;">
            <div class="search_seedcare" style="justify-content:center !important;">
                <div class="form-outline" id="outline-form">
                    <input id="search-input" type="search" id="form1" class="form-control search_seedcare_form"
                        placeholder="Найти растение" />
                </div>
                <button id="search-button" type="button" class="search_seedcare_button btn btn-primary">
                    <img src="../res/search.svg" alt="" srcset=""
                        style="background-color: #45D08D; padding:9px; border-radius: 50%;">
                </button>
            </div>
        </div>

        <div style="max-width: 950px; max-height: 450px; margin: 5rem;">
            <div class="imageGallery" style="display: block;">
                <ul>
                    <li class="prev" style="display:none;"><img
                            src="http://kbrabrand.no/assets/codepen/responsiveGallery/raster-prev.png" /></li>
                    <li class="image">
                        <a href="#">
                            <img src="https://srokigodnosti.ru/wp-content/uploads/2022/03/chem-polezna-morkov-kartinka.jpg" />
                        </a>
                    </li>
                    <li class="image">
                        <a href="#">
                            <img src="https://proprikol.ru/wp-content/uploads/2020/03/kartinki-arbuzy-9.jpg" />
                        </a>
                    </li>
                    <li class="image active">
                        <a href="#">
                            <img src="https://prorastet.ru/wp-content/uploads/2019/07/Sonia_5961.jpg" />

                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div style="width: 100%; max-width: 760px; font-family:'El Messiri';">
            <h1 style=" font-size:90px; text-align: center; display:block;">
                Мои Растения
            </h1>

            <div style="height:220px;background: #FFFFFF;
            box-shadow: 5px 10px 53px -18px rgba(0, 0, 0, 0.16);
            border-radius: 97px; padding:3rem; ">
                <h4 style=" text-align: center; width: 100%;" class="mb-3">Ближайшие задачи</h4>
                <div style="font-family: 'Inter';">
                    <li><ul>Полить помидоры через 3 дня</ul></li>
                    <li><ul>Проверить рассаду огурцов</ul></li>
                </div>
            </div>
            <div class="mb-3">

                    <div class="calendar-wrapper" style="border-radius: 4%; background:#FFF !important;">
                        <!--  <button id="btnPrev" type="button">Prev</button>-->
                        <!--	  <button id="btnNext" type="button">Next</button>-->
                        <div id="divCal" style=""></div>
                    </div>

            </div>
        </div>
        <div style="" class="plant-card-container mb-3" style="width: 100%;">
            <div class="plant-card" style="max-width:560px; height:256px;">
                <img src="../res/pickles.jpeg" alt="" width="172px" height="124px" style="float:right">
                <p style="text-transform: uppercase; color: #0000006E;
                    ">Овощи</p>
                <h6 style="font-size:24px; margin: 1.5rem 0;"><b>Огурец</b></h6>
                <p style="color: rgba(0, 0, 0, 0.7); font-size:16px; max-width: 70%;">Огурец появился в культуре
                    более 6 тысяч лет
                    назад. Родина
                    этого вида - тропические и
                    субтропические...</p>
                <a href="https://aloevera.thevladoss.site/wiki/"><button type="button" style="outline:0px; background: rgba(69, 208, 141, 0.57);
                        border-radius: 54px; border:1px solid rgba(69, 208, 141, 0.57); color:#FFFFFF; padding: 7px 37px;
">Подробнее</button></a>
            </div>
            <div class="plant-card" style="width:560px; height:256px;">
                <img src="https://prorastet.ru/wp-content/uploads/2019/07/Sonia_5961.jpg" alt="" width="172px" height="124px" style="float:right">
                <p style="text-transform: uppercase; color: #0000006E;
                    ">Цветы</p>
                <h6 style="font-size:24px; margin: 1.5rem 0;"><b>Роза</b></h6>
                <p style="color: rgba(0, 0, 0, 0.7); font-size:16px; max-width: 70%;">Собирательное название видов и сортов представителей рода Шиповник, растущих в дикой природе. </p>
                <a href="https://aloevera.thevladoss.site/wiki/"><button type="button" style="outline:0px; background: rgba(69, 208, 141, 0.57);
                        border-radius: 54px; border:1px solid rgba(69, 208, 141, 0.57); color:#FFFFFF; padding: 7px 37px;
">Подробнее</button></a>
            </div>
            <div class="plant-card" style="width:560px; height:256px;">
                <img src="https://cstor.nn2.ru/blog/data/blog/2021-06/3197609_1622971351.jpg" alt="" width="172px" height="124px" style="float:right">
                <p style="text-transform: uppercase; color: #0000006E;
                    ">Фрукты</p>
                <h6 style="font-size:24px; margin: 1.5rem 0;"><b>Манго</b></h6>
                <p style="color: rgba(0, 0, 0, 0.7); font-size:16px; max-width: 70%;">Плоды растений рода Манго семейства Анакардиевые. Вид Манго индийское имеет большое сельскохозяйственное значение.</p>
                <a href="https://aloevera.thevladoss.site/wiki/"><button type="button" style="outline:0px; background: rgba(69, 208, 141, 0.57);
                        border-radius: 54px; border:1px solid rgba(69, 208, 141, 0.57); color:#FFFFFF; padding: 7px 37px;
">Подробнее</button></a>
            </div>
            <div class="plant-card" style="width:560px; height:256px;">
                <img src="https://proprikol.ru/wp-content/uploads/2020/03/kartinki-arbuzy-9.jpg" alt="" width="172px" height="124px" style="float:right">
                <p style="text-transform: uppercase; color: #0000006E;
                    ">Ягоды</p>
                <h6 style="font-size:24px; margin: 1.5rem 0;"><b>Арбуз вкусный</b></h6>
                <p style="color: rgba(0, 0, 0, 0.7); font-size:16px; max-width: 70%;">Однолетнее травянистое растение, вид рода Арбуз семейства Тыквенные. </p>
                <a href="https://aloevera.thevladoss.site/wiki/"><button type="button" style="outline:0px; background: rgba(69, 208, 141, 0.57);
                        border-radius: 54px; border:1px solid rgba(69, 208, 141, 0.57); color:#FFFFFF; padding: 7px 37px;
">Подробнее</button></a>
            </div>
            <div class="plant-card" style="width:560px; height:256px;">
                <img src="https://srokigodnosti.ru/wp-content/uploads/2022/03/chem-polezna-morkov-kartinka.jpg" alt="" width="172px" height="124px" style="float:right">
                <p style="text-transform: uppercase; color: #0000006E;
                    ">Корнеплоды</p>
                <h6 style="font-size:24px; margin: 1.5rem 0;"><b>Морковь</b></h6>
                <p style="color: rgba(0, 0, 0, 0.7); font-size:16px; max-width: 70%;">Двулетнее растение, овощная культура, подвид вида морковь дикая. </p>
                <a href="https://aloevera.thevladoss.site/wiki/"><button type="button" style="outline:0px; background: rgba(69, 208, 141, 0.57);
                        border-radius: 54px; border:1px solid rgba(69, 208, 141, 0.57); color:#FFFFFF; padding: 7px 37px;
">Подробнее</button></a>
            </div>
            <div class="plant-card" style="width:560px; height:256px;">
                <img src="https://www.retail.ru/upload/medialibrary/392/pshenitsa_dva_kolosa_na_fone_polya.jpg" alt="" width="172px" height="124px" style="float:right">
                <p style="text-transform: uppercase; color: #0000006E;
                    ">Зерновые</p>
                <h6 style="font-size:24px; margin: 1.5rem 0;"><b>Пшеница</b></h6>
                <p style="color: rgba(0, 0, 0, 0.7); font-size:16px; max-width: 70%;">Род травянистых, в основном однолетних, растений семейства Злаки, ведущая зерновая культура во многих странах. </p>
                <a href="https://aloevera.thevladoss.site/wiki/"><button type="button" style="outline:0px; background: rgba(69, 208, 141, 0.57);
                        border-radius: 54px; border:1px solid rgba(69, 208, 141, 0.57); color:#FFFFFF; padding: 7px 37px;
">Подробнее</button></a>
            </div>
        </div>

        <a href="#"><button type="button" class="mb-3" style="outline:0px; background: rgba(69, 208, 141, 0.57);
            padding: 0 54px;
            border-radius: 54px; border:1px solid rgba(69, 208, 141, 0.57); font-family: 'El Messiri';
font-style: normal;
font-weight: 400;
font-size: 30px;
line-height: 47px;
color: #FFFFFF; padding: 7px 37px;
">Добавить</button></a>


    </main>
    <footer>
        <p>Разработано в рамках хакатона TulaHack2022</p>
        <p>© Aloe Vera, 2022</p>

    </footer>
    <script src="../js/bootstrap.bundle.min.js"></script>

</body>

    <script src="js/index.js"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
    $('li.next, li.prev').click(function (e) {
        var element = $(e.target).closest('li')
            , direction = (element.hasClass('prev') ? 'prev' : 'next')
            , activeImage = element.siblings('.active')
            , goTo;

        if (direction === 'prev') {
            goTo = activeImage.prev('.image');
        } else {
            goTo = activeImage.next('.image');
        }

        if (!goTo.length && direction === 'prev') {
            goTo = activeImage.siblings('.image').last();
        } else if (!goTo.length) {
            goTo = activeImage.siblings('.image').first();
        }

        goTo.addClass('active');
        activeImage.removeClass('active');
    });

    setInterval(function (e) {
        var element = $('li.prev').closest('li')
            , direction = (element.hasClass('prev') ? 'prev' : 'next')
            , activeImage = element.siblings('.active')
            , goTo;


        goTo = activeImage.prev('.image');


        if (!goTo.length && direction === 'prev') {
            goTo = activeImage.siblings('.image').last();
        } else if (!goTo.length) {
            goTo = activeImage.siblings('.image').first();
        }

        goTo.addClass('active');
        activeImage.removeClass('active');
    }, 8000);
</script>
</html>