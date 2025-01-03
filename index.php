<? session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <title> Вся канцелярия </title>
    <meta name="description" content="Концелярские товары!" />

    <link rel="shortcut icon" href="./resource/img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./resource/css/normalize.css">
    <link rel="stylesheet" href="./resource/css/base.css">
    <link rel="stylesheet" href="./resource/css/header.css">
    <link rel="stylesheet" href="./resource/css/banner.css">
    <link rel="stylesheet" href="./resource/css/scroll.css">
    <link rel="stylesheet" href="./resource/css/footer.css">
    <script src="./resource/js/detectBrowser.js"></script>
    <script src="./resource/js/header.js" defer></script>
    <script src="./resource/js/banner.js" defer></script>
    <script src="./resource/js/slider.js" defer></script>
    <script src="./resource/js/registration.js" defer></script>
    <script src="./resource/js/login.js" defer></script>
    <script src="./resource/js/favourite-cart.js" defer></script>
    <script src="./resource/js/showMessage.js" defer></script>
    <script src="//code-ya.jivosite.com/widget/Wa5vYcSeDT" async></script>
</head>

<body>
 
    <!-- <img src="Data/Картинки и баннеры/Логотипы/1.jpg" alt=""> -->
    <?php  require(__DIR__ . '/view/header.php');  ?>

    <?php  require(__DIR__ . '/view/banner.php');  ?>

    <?php require(__DIR__ . '/view/sliderProducts.php'); ?>

    <?php require(__DIR__ . '/view/sliderBrands.php');   ?>

    <?php require(__DIR__ . '/view/footer.php');  ?>

</body>

</html>