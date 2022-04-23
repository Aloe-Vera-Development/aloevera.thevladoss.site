<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Example page</title>

    <!-- Фавиконка -->
    <link rel="apple-touch-icon" sizes="180x180" href="../res/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../res/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../res/favicon/favicon-16x16.png">
    <link rel="manifest" href="../res/favicon/site.webmanifest">


    <!-- Bootstrap -->
    <link rel="stylesheet" href="../styles/bootstrap.min.css">
    <!--  Eye icon, etc.  -->
    <link rel=”stylesheet” href=”https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css” />

    <!-- Font awesome -->
    <script src="https://kit.fontawesome.com/b68a95f0ee.js" crossorigin="anonymous"></script>

    <!-- CSS конкретно для этой страницы -->
    <link rel="stylesheet" href="../styles/custom/styles.css">
    <link rel="stylesheet" href="../styles/custom/login.css">
</head>

<body>
    <main>
        <!-- Navbar -->
        <div class="navbar_wrapper">
            <nav class="navbar_seedcare navbar navbar-expand-lg navbar-light bg-light">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarTogglerDemo" aria-controls="navbarTogglerDemo" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="#"><img src="../res/bell.svg" alt="SeedCare" srcset=""></a>

                <!-- <div class="navbar_collapse_disabled" id="navbarTogglerDemo"> -->
                <div class="collapse navbar-collapse" id="navbarTogglerDemo">
                    <!-- <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Календарь</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Мои Растения</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#">База Знаний</a>
                        </li>
                        <li>

                        </li>
                    </ul> -->
                    <div class="input-group_wrapper" style="flex-grow:1; height:69px;">


                        <div class="input-group" class="search_seedcare" style="justify-content:center !important;">
                            <div class="form-outline" id="outline-form">
                                <input id="search-input" type="search" id="form1"
                                    class="form-control search_seedcare_form" placeholder="Поиск" />
                            </div>
                            <button id="search-button" type="button" class="search_seedcare_button btn btn-primary">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                    <!-- <div class="flex_spacer"></div> -->
                    <!-- <a href="#">
                        <div class="profile_mini">

                            Роман Лернер
                            <img src="../res/avatar.png" alt="аватар">

                        </div>
                    </a> -->

                    <a href="#" style="" id="registrationButton_navbar">
                        <button type="button" class="navbar_button btn btn-default btn-block rounded-pill my-2">
                            Регистрация
                        </button>
                    </a>

                    <a href="#">
                        <button type="button" class="navbar_button btn btn-default btn-block rounded-pill my-2">
                            Вход
                        </button>
                    </a>
                </div>
            </nav>
        </div>



    <div class="d-flex flex-column justify-content-center text-center">
        <h1 class="my-4">Регистрация</h1>
        <form class="d-flex flex-column justify-content-center container w-50">
            <div class="container">
                <input type="text" id="inputName" class="form-control mb-3" placeholder="Имя"
                       style="border-radius: 3rem; height: 2.2rem">
                <input type="text" id="inputSurname" class="form-control" placeholder="Фамилия"
                       style="border-radius: 3rem; height: 2.2rem">
                <input type="text" id="inputThirdname" class="form-control my-3" placeholder="Отчество"
                       style="border-radius: 3rem; height: 2.2rem">
                <input type="text" id="inputCity" class="form-control my-3" placeholder="Город проживания"
                       style="border-radius: 3rem; height: 2.2rem">

                <div class="d-flex flex-column justify-content-between mt-2 mb-4">
                    Дата рождения
                    <div class="d-inline-flex">
                        <input type="text" id="inputDate" class="form-control w-25 text-center" placeholder="День"
                               style="border-radius: 3rem; height: 2.2rem">
                        <input type="text" id="inputMounth" class="form-control mx-3 text-center" placeholder="Месяц"
                               style="border-radius: 3rem; height: 2.2rem">
                        <input type="text" id="inputYear" class="form-control w-25 text-center" placeholder="Год"
                               style="border-radius: 3rem; height: 2.2rem">
                    </div>
                </div>


                <input type="email" id="inputEmail" class="form-control my-3" placeholder="Email"
                       style="border-radius: 3rem; height: 2.2rem">
                <input type="password" id="inputPassword" class="form-control my-3" placeholder="Пароль"
                       style="border-radius: 3rem; height: 2.2rem">
                <input type="password" id="inputPasswordAgain" class="form-control my-3" placeholder="Подтвердите пароль"
                       style="border-radius: 3rem; height: 2.2rem">
            </div>


            <label class="login_form__secondary remember_me container">
                <div class="d-flex justify-content-start remember_me_inside">
                    <div class="control-group">
                        <label class="control control-checkbox">
                            <input type="checkbox" checked="checked" />
                            <div class="control_indicator"></div>
                        </label>
                    </div>
                    <div class="mt-1 container">
                        Я принимаю условия <a href="#">пользовательского соглашения</a> и даю <a href="#">согласие</a> на обработку персональных данных
                    </div>
                </div>
            </label>



            <button class="login_form__button btn  btn-block rounded-pill container text-light w-25 mt-1 mb-3" type="submit" style="background: #45D08D91; font-size-adjust: inherit">
                Зарегистрироваться
            </button>

            <div class="d-flex container justify-content-center my-2">
                <button class="btn btn-default mx-1 border border-1" type="button" style="border-radius: 15px; aspect-ratio:1/1; border-color: #45D08D91 !important;">
                    <img src="../res/Google.svg" alt="">
                </button>
                <button class="btn btn-default mx-5 border border-1" type="button" style="border-radius: 15px; aspect-ratio:1/1; border-color: #45D08D91 !important;">
                    <img src="../res/vk.svg" alt="">
                </button>
                <button class="btn btn-default mx-1 border border-1" type="button" style="border-radius: 15px; aspect-ratio:1/1; border-color: #45D08D91 !important;">
                    <img src="../res/ok.svg" alt="">
                </button>
            </div>
        </form>
    </div>










    </main>
    <footer>
        <p>Разработано в рамках хакатона TulaHack2022</p>
        <p>© Aloe Vera, 2022</p>

    </footer>
    <script src="../js/bootstrap.bundle.min.js"></script>
</body>

</html>