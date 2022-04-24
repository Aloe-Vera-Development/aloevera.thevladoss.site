<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вики</title>

    <!-- Фавиконка -->
    <link rel="apple-touch-icon" sizes="180x180" href="../res/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../res/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../res/favicon/favicon-16x16.png">
    <link rel="manifest" href="../res/favicon/site.webmanifest">


    <!-- Bootstrap -->
    <link rel="stylesheet" href="../styles/bootstrap.min.css">


    <!-- CSS конкретно для этой страницы -->
    <link rel="stylesheet" href="../styles/custom/styles.css">
    <link rel="stylesheet" href="../styles/custom/wiki.css">
</head>

<body>
        <?php
        require_once '/home/users/o/osinvladislav/domains/aloevera.thevladoss.site/navbar.php';
        require_once '/home/users/o/osinvladislav/domains/aloevera.thevladoss.site/services/UserService.php';
        ?>

        <main style="width: 100%; display:flex; flex-direction: row; justify-content: center;">

        <?php
        if (isset($_GET['id'])) {
            $plant = (new UserService())->getPlant($_GET['id']);
            if(!$plant){
                echo 'Страница не существует';
            } else {
                echo $plant->description;
            }
        } else {
            echo 'Страница не существует';
        }
        ?>

    </main>
    <footer>
        <p>Разработано в рамках хакатона TulaHack2022</p>
        <p>© Aloe Vera, 2022</p>

    </footer>
    <script src="../js/bootstrap.bundle.min.js"></script>
        <script>
            function back() {
                document.location.replace(document.referrer);
            }
        </script>
</body>

</html>