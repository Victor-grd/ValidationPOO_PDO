<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/home.css">

        <!-- Slider -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/css/swiper.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/css/swiper.min.css">
    <link rel="stylesheet" href="./css/slider.css">

    <link rel="icon" type="image/png" href="#">
    <title>Document</title>
</head>
<body>
    <img class="background" src="./elements/images/background/Ghost.jpg" alt="" srcset="">
    <?php
    // Autoloader
        spl_autoload_register(function($className) {
            $file = './CRUD/class/' .$className . '.php';
            $childFile = './CRUD/class/child/' .$className . '.php';
            $traits = './CRUD/traits/' .$className . '.php';

            if (file_exists($file)) {
                include $file;
            }
            if (file_exists($childFile)) {
                include $childFile;
            }
            if (file_exists($traits)) {
                include $traits;
            }
        });
    // end Autoloader
    ?>