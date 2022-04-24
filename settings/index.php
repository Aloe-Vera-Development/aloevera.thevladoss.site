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

    <!-- Font awesome -->
    <script src="https://kit.fontawesome.com/b68a95f0ee.js" crossorigin="anonymous"></script>

    <!-- CSS конкретно для этой страницы -->
    <link rel="stylesheet" href="../styles/custom/styles.css">
</head>

<body>
    <main style="font-family: 'El Messiri', sans-serif">
        <!-- Navbar -->
        <!-- Navbar -->
        <div class="navbar_wrapper">
            <nav class="navbar_seedcare navbar navbar-expand-lg navbar-light bg-light">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarTogglerDemo" aria-controls="navbarTogglerDemo" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="#">
                    <div style="display:block; height:75px; width:250px; background-color: chocolate;"></div>
                </a>

                <!-- <div class="navbar_collapse_disabled" id="navbarTogglerDemo"> -->
                <div class="collapse navbar-collapse" id="navbarTogglerDemo" style="justify-content:center;">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <!-- <a class="nav-link" href="#">Домой <span class="sr-only">(current)</span></a> -->
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
                    <!-- <div class="flex_spacer"></div> -->

                </div>
                <div class="profile_mini">
                    <a href="#">
                        <img src="../res/avatar.png" alt="аватар">
                        РЛ
                    </a>
                </div>
            </nav>
        </div>

        <h1 class="h3 font-weight-normal mt-5" style="text-align:center;">Настройки личного кабинета</h1>
        <div class="d-flex align-items-center flex-column mb-3">
            <img src="../res/avatar.png" alt="аватар"
                style="width: 15%; border: 3px solid #45D08D91; border-radius: 49%">
            <form class="login_form container p-25 container w-50" style="max-width: 31%">
                <input type="text" id="inputNickname" class="form-control my-3 mt-5" placeholder="Имя"
                    style="border-radius: 3rem; height: 3rem">
                <input type="email" id="inputEmail" class="form-control" placeholder="Почта"
                    style="border-radius: 3rem; height: 3rem">
                <input type="password" id="inputPassword" class="form-control my-3" placeholder="Смена пароля"
                    style="border-radius: 3rem; height: 3rem">
                <div class="container align-items-center w-50">
                    <button class="login_form__button btn btn-default btn-block rounded-pill my-2 container text-light"
                        type="submit" style="background: #45D08D91;">
                        Сохранить
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