<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Main</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link href="style/index.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
<!--header -->
<section class="main-header">
    <div class="container">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 hreg">
            <img src="image/INFO.png" alt="alt">
            <form id="h_reg_form" action="" method="post">
                <input type="hidden">
                <input id="h_reg_b" type="submit" value="">
            </form>
        </div>

    </div>
    <div class="container h-bottom">
    <nav class="navbar navbar-default">
        <div class="container-fluid nav">
            <div class="navbar-collapse h-correctly" id="bs-example-navbar-collapse-1">
                <ul id="ul_m_h" class="nav navbar-nav">
                    <li>
                        <a href="http://localhost/bogdan/Vulcan/">
                            ИГРОВЫЕ ЗАЛЫ
                        </a>
                    </li>
                    <li>
                        <a  href="http://localhost/bogdan/Vulcan/page-room.php">
                            ТУРНИРЫ
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            АКЦИИ
                        </a>
                    </li>
                    <li>
                        <a href="http://localhost/bogdan/Vulcan/blog-page.php">
                            БЛОГИ
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <img id="h_right_cut" src="image/h_right_cut.png" alt="alt">
        <img id="h_left_cut" src="image/h_left_cut.png" alt="alt">
    </nav>
    </div>
</section>
<!--end header -->
<!--contant -->
<section class="s-c">
    <div id="main-contant" class="container">
        <p class="main_title">ИГРОВЫЕ ЗАЛЫ ВУЛКАН</p>
        <div class="row">
        <?php
        $count = 8;
        for($i = 0; $i<$count; $i++ ) {
        ?>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 c-main">
            <div class="c-container">
                <div class="col-xs-12 content-m-block">
                   <img src="image/c_img.png" alt="alt">
                </div>
            </div>
            <h5 class="m-container-title">Lerual Ipsun</h5>
        </div>
        <?php } ?>
        </div>
        <div class="col-xs-10 paiment-s">
            <ul class="p-system-ul">
                <li class="paiment-system"><a href="#"><img src="image/qiwi.png" alt="alt"></a></li>
                <li class="paiment-system"><a href="#"><img src="image/yandex%20money.png" alt="alt"></a></li>
                <li class="paiment-system"><a href="#"><img src="image/web%20money.png" alt="alt"></a></li>
                <li class="paiment-system"><a href="#"><img src="image/visa.png" alt="alt"></a></li>
                <li class="paiment-system"><a href="#"><img src="image/mastercard.png" alt="alt"></a></li>
                <li class="paiment-system"><a href="#"><img src="image/liqpay.png" alt="alt"></a></li>
                <li class="paiment-system"><a href="#"><img src="image/mail%20money.png" alt="alt"></a></li>
            </ul>
        </div>
        <p class="second_title">Бонусная политика и действующие акции в казино</p>
        <p class="text">Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать несколько абзацев более менее осмысленного текста рыбы на русском языке, а начинающему оратору отточить навык публичных выступлений в домашних условиях. При создании генератора мы использовали небезызвестный универсальный код речей.</p>
        <p class="text bottom">Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать несколько абзацев более менее осмысленного текста рыбы на русском языке, а начинающему оратору отточить навык публичных выступлений в домашних условиях. При создании генератора мы использовали небезызвестный универсальный код речей.</p>
    </div>
</section>
<!--end of content -->
<!--footer -->
<section>
    <div style="min-height: 200px" class="container">
        <p class="footer-t">&copy; 2016 Игровые автоматы Вулкан.info казино</p>
    </div>
</section>
<!--end footer -->
</body>
</html>