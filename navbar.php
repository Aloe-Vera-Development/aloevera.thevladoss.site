<?php
if (!isset($_COOKIE['login'])) {
?>
<div class="navbar_wrapper">
    <nav class="navbar_seedcare navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarTogglerDemo" aria-controls="navbarTogglerDemo" aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-brand" href="#">
            <b><a style="color: #1A5B20">Seed</a><a style="color: #45D08D">Care</a></b>
        </div>
        <div class="flex_spacer"></div>
        <div>
            <button class="btn text-light rounded-pill" style="background: #45D08D91; width: 162px; height: 38px;" onclick="logBtn()">Войти</button>
            <button class="btn text-light rounded-pill" style="background: #45D08D91; width: 162px; height: 38px;" onclick="regBtn()">Регистрация</button>
        </div>
    </nav>
</div>
<?php
} else {
?>
<div class="navbar_wrapper">
    <nav class="navbar_seedcare navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarTogglerDemo" aria-controls="navbarTogglerDemo" aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-brand" href="#">
            <b><a style="color: #0D0D0D66">SeedCare</a></b>
        </div>
        <div class="flex_spacer"></div>

        <div class="navbar_collapse_disabled" id="navbarTogglerDemo">
            <div class="collapse navbar-collapse" id="navbarTogglerDemo">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0 w-100">
                    <li class="nav-item" >
                        <a href="https://aloevera.thevladoss.site/" style="color: #0D0D0D66">Главная</a>
                    </li>
                    <li class="nav-item">
                        <a href="https://aloevera.thevladoss.site/personal_page/" style="color: #0D0D0D66">Мои растения</a>
                    </li>
                    <li class="nav-item">
                        <a href="https://aloevera.thevladoss.site/" style="color: #0D0D0D66">Календарь</a>
                    </li>
                </ul>

                <div class="flex_spacer"></div>

                <div class="d-flex justify-content-end" style="align-items: center">
                    <!--          Иконка колокольчика          -->
                    <a href="https://aloevera.thevladoss.site/">
                        <img src="../res/bell.svg" alt="" style="width:20px;height:20px;margin-right: 16px;">
                    </a>
                    <!--           Аватарка человечка         -->
                    <a href="https://aloevera.thevladoss.site/">
                        <img src="<?=$_COOKIE['photo']?>" alt="" style="width:30px;height:30px;border-radius: 50%;object-fit: cover;">
                    </a>
                </div>
            </div>
    </nav>
</div>
<?php
}
?>