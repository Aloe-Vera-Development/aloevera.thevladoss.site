<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Профиль</title>

    <!-- Фавиконка -->
    <link rel="apple-touch-icon" sizes="180x180" href="../res/favicon/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="../res/favicon/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="../res/favicon/favicon-16x16.png" />
    <link rel="manifest" href="../res/favicon/site.webmanifest" />

    <!-- Bootstrap -->
    <link rel="stylesheet" href="../styles/bootstrap.min.css" />

    <!-- CSS конкретно для этой страницы -->
    <link rel="stylesheet" href="../styles/custom/profile.css" />
    <link rel="stylesheet" href="../styles/custom/styles.css" />
</head>

<body>
    <main style="font-family: 'Inter'">
        <?php
        require_once '/home/users/o/osinvladislav/domains/aloevera.thevladoss.site/navbar.php';

        require_once '/home/users/o/osinvladislav/domains/aloevera.thevladoss.site/services/UserService.php';

        if (isset($_REQUEST['logout'])) {
            $answ = (new UserService)->signOut();
            header('Location: https://aloevera.thevladoss.site/login/');
        }
        ?>

        <div
            style="display:flex; flex-direction: column; justify-content:center; align-items:center;margin-top: 164px;">
            <div class="" style="display: flex; flex-direction: row; align-items: center">
                <img src="../res/bgprofile.svg" alt="" style="position:absolute; z-index: -1; top: 0%; left:20%;">

                <img src="<?=$_COOKIE['photo']?>" alt="аватар" id="sex" style="margin-right: 2rem; border-radius:50%; width: 200px; height: 200px;" />
                <div>
                    <h1 class="" style="">Профиль</h1>
                    <p>Здесь Вы можете наблюдать за своим прогрессом</p>
                </div>
            </div>
            <div class="profile-wrapper" style="max-width: 1200px; width: 100%;">
                <div class="input_fields_profile" style="max-width: 500px">
                    <h2 class="" style="text-align: center">Мои данные</h2>
                    <form class="login_form" style="display: flex; flex-direction: column">
                        <div class="mb-3">
                            <label class="field_title" for="inputLastname">Фамилия</label>
                            <input type="text" id="inputLastname" class="form-control"
                                placeholder="Романов" style="
                    border: 2px solid rgba(0, 0, 0, 0.3);
                    box-sizing: border-box;
                    border-radius: 54px;
                    height: 50px;
                  " value="<?=$_COOKIE['last_name']?>"/>
                        </div>
                        <div class="mb-3">
                            <label class="field_title" for="inputNickname">Имя</label>
                            <input type="text" id="inputNickname" class="form-control"
                                placeholder="Роман" style="
                    border: 2px solid rgba(0, 0, 0, 0.3);
                    box-sizing: border-box;
                    border-radius: 54px;
                    height: 50px;
                  "  value="<?=$_COOKIE['name']?>"/>
                        </div>
                        <div class="mb-3">
                            <label class="field_title" for="inputCity">Город</label>
                            <input type="text" id="inputCity" class="form-control"
                                   placeholder="Тула" style="
                    border: 2px solid rgba(0, 0, 0, 0.3);
                    box-sizing: border-box;
                    border-radius: 54px;
                    height: 50px;
                  "  value="<?=$_COOKIE['city']?>"/>
                        </div>
                        <div class="mb-3">
                            <label class="field_title" for="inputLogin">Логин</label>
                            <input type="text" id="inputLogin" class="form-control"
                                placeholder="roman" style="
                    border: 2px solid rgba(0, 0, 0, 0.3);
                    box-sizing: border-box;
                    border-radius: 54px;
                    height: 50px;
                  "  value="<?=$_COOKIE['login']?>"/>
                        </div>
                        <div class="mb-3">
                            <label class="field_title" for="inputEmail">E-mail</label>
                            <input type="email" id="inputEmail" class="form-control" placeholder="romanov_r@mail.ru"
                                style="
                    border: 2px solid rgba(0, 0, 0, 0.3);
                    box-sizing: border-box;
                    border-radius: 54px;
                    height: 50px;
                  "  value="<?=$_COOKIE['email']?>"/>
                        </div>
                        <!-- Rounded switch -->
                        <div style="display: flex; flex-direction: row; align-items: center" class="mb-3">
                            <label class="switch" style="margin-right: 1rem">
                                <input type="checkbox" />
                                <span class="slider round" style="display: block"></span>
                            </label>
                            <label>Получать уведомления</label>
                        </div>

                        <div style="
                  display: flex;
                  flex-direction: column;
                  align-items: center;
                  justify-content: center;
                  font-family: 'Inter';
                  font-style: normal;
                  font-weight: 400;
                  font-size: 20px;
                  line-height: 24px;
                  text-align: center;

                  color: #ffffff;
                ">
                            <button
                                class="login_form__button btn btn-default btn-block rounded-pill my-2 container text-light"
                                type="submit" style="background: #67d9a2; margin: 21px 42px">
                                Сохранить изменения
                            </button>
                            <label for="" style="margin-top: 1rem"><a href="https://aloevera.thevladoss.site/profile/index.php?logout=true" style="color: black">Выйти из
                                    аккаунта</a></label>
                        </div>
                    </form>
                </div>
                <div class="achievments_counter" style="
              max-width: 465px;
              width: 100%;
              min-height: 269px;
              display: flex;
              flex-direction: column;
              justify-content: center;
              align-items: center;
              background: rgba(69, 208, 141, 0.57);
              border-radius: 29px;
            ">
                    <p style="font-size: 45px">Достижения</p>
                    <p style="font-size: 50px">
                        <img src="../res/cupcup.svg" alt="" srcset="" />
                        <span style="display: inline-block; margin: 0 2rem">10</span>
                        <img src="../res/cupcup.svg" alt="" srcset="" />
                    </p>
                    <p style="font-size: 40px">дней с нами!</p>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <p>Разработано в рамках хакатона TulaHack2022</p>
        <p>© Aloe Vera, 2022</p>
    </footer>
    <script src="../js/bootstrap.bundle.min.js"></script>
</body>

</html>