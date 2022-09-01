<?php
include 'includes/configImgs.php';
include 'includes/configLinks.php';
error_reporting(0);

$p = $_GET['page'];
$gg;
$m_color1 = "#fa4f00";
$b_color1 = "#16181a";

$m_color2 = "#fa4f00";
$b_color2 = "#16181a";

$m_color3 = "#fa4f00";
$b_color3 = "#16181a";

$m_color4 = "#fa4f00";
$b_color4 = "#16181a";

$m_color5 = "#fa4f00";
$b_color5 = "#16181a";

$m_color6 = "#fa4f00";
$b_color6 = "#16181a";
// $m_color1 = "#16181a";
// $b_color1 = "#fa4f00";
if ($p == 1) {
    $gg = 1;
    $m_color1 = "#16181a";
    $b_color1 = "#fa4f00";
} elseif ($p == 2) {
    $gg = 2;
    $m_color2 = "#16181a";
    $b_color2 = "#fa4f00";
} elseif ($p == 3) {
    $gg = 3;
    $m_color3 = "#16181a";
    $b_color3 = "#fa4f00";
} elseif ($p == 4) {
    $gg = 4;
    $m_color4 = "#16181a";
    $b_color4 = "#fa4f00";
} elseif ($p == 5) {
    $gg = 5;
    $m_color5 = "#16181a";
    $b_color5 = "#fa4f00";
} elseif ($p == 6) {
    $gg = 6;
    $m_color6 = "#16181a";
    $b_color6 = "#fa4f00";
} else {
    $gg = 0;
}

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <link href='https://fonts.googleapis.com/css?family=Kanit' rel='stylesheet' />
    <!-- Bootstrap CSS -->
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC' crossorigin='anonymous'>
    <link rel='icon' type='image/x-icon' href=<?php echo $img_title_logo ?>>

    <link href="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.theme.default.min.css" rel="stylesheet">
    <script src="https://owlcarousel2.github.io/OwlCarousel2/assets/vendors/jquery.min.js">
    </script>
    <script src="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/owl.carousel.js">
    </script>

    <!-- <link href = '/includes/styles.css' rel = 'stylesheet'> -->
    <link rel='stylesheet' href='./includes/styles.css' crossorigin='anonymous'>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title><?php echo $name_web ?></title>
</head>

<body>

    <div class="box-line">
        <ul>
            <li>
                <div class="d-flex">
                    <div class="d-flex mx-0 line-1">
                        <div style="width: 3rem; margin-bottom:1rem; margin-right:2px;margin-top:1rem">
                            <img class="d-block w-100" src=<?php echo $qr_line ?> alt="">
                        </div>
                        <p style="margin-right:0.8rem">ติดต่อเรา</p>
                    </div>
                    <div class="line-2 text-center">
                        <div style="width: 60%; margin: 0.5rem auto"><img class="d-block w-100" src=<?php echo $qr_line ?> alt=""></div>
                        <?php echo $id_line ?>
                    </div>
                </div>
            </li>
        </ul>
    </div>

    <div class="row menubar-mini">
        <div class="col"><?php include 'includes/headerPhone.php'; ?></div>
    </div>

    <div class="d-flex ">
        <div class="flex-grow-1 p-2">
            <div class="img-h">
                <a href=<?php echo $link_menu1 ?>>
                    <img class="b-block h-100" src=<?php echo $img_logo ?> alt="">
                </a>
            </div>
        </div>
        <div class="d-flex">
            <a class="btn-sn" href=<?php echo $link_signIn ?>>เข้าสู่ระบบ</a>
            <a class="btn-su" href=<?php echo $link_signUp ?>>สมัครสมาชิก</a>
        </div>
    </div>
    <div class="container px-5">
        <br>
        <div class="row">
            <div class="col-md-6 text-center mt-3">
                <div class="d-flex justify-content-center align-items-center">
                    <a class="menu-title" href=<?php echo $link_menu1 ?>>
                        <div class="icons menu-icon" style="color: <?php echo $m_color1; ?>;background: <?php echo $b_color1; ?>">
                            <i class="bi bi-house-fill"></i>
                        </div>
                        <h5>หน้าหลัก</h5>
                    </a>
                    <a class="menu-title" href=<?php echo $link_menu2 ?>>
                        <div class="icons menu-icon" style="color: <?php echo $m_color2; ?>;background: <?php echo $b_color2; ?>">
                            <i class="bi bi-currency-exchange"></i>
                        </div>
                        <h5>รับรายได้</h5>
                    </a>
                    <a class="menu-title" href=<?php echo $link_menu3 ?>>
                        <div class="icons menu-icon" style="color: <?php echo $m_color3; ?>;background: <?php echo $b_color3; ?>">
                            <i class="bi bi-play-circle-fill"></i>
                        </div>
                        <h5>ทดลองเล่น</h5>
                    </a>
                </div>
            </div>
            <div class="col-md-6 text-center mt-3">
                <div class="d-flex justify-content-center align-items-center">
                    <a class="menu-title" href=<?php echo $link_menu4 ?>>
                        <div class="icons menu-icon" style="color: <?php echo $m_color4; ?>;background: <?php echo $b_color4; ?>">
                            <i class="bi bi-bookmark-star-fill"></i>
                        </div>
                        <h5>โปรโมชั่น</h5>
                    </a>
                    <a class="menu-title" href=<?php echo $link_menu5 ?>>
                        <div class="icons menu-icon" style="color: <?php echo $m_color5; ?>;background: <?php echo $b_color5; ?>">
                            <i class="bi bi-card-heading"></i>
                        </div>
                        <h5>บทความ</h5>
                    </a>
                    <a class="menu-title" href=<?php echo $link_menu6 ?> target="_blank">
                        <div class="icons menu-icon" style="color: <?php echo $m_color6; ?>;background: <?php echo $b_color6; ?>">
                            <i class="bi bi-headset"></i>
                        </div>
                        <h5>ติดต่อเรา</h5>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <br>
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src=<?php echo $img_slide1 ?> class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src=<?php echo $img_slide2 ?> class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="slide-mini ">
        <?php include 'pages/owl_carosel.php'; ?>
    </div>

    <br>
    <?php
    if ($gg == 2) {
        include 'pages/page2.php';
    } elseif ($gg == 4) {
        include 'pages/page3.php';
    } else {
        include 'pages/page1.php';
    }
    ?>



    <!-- footer -->
    <br>
    <div class="base-hr"></div>
    <br>
    <div class="row w-100 mt-2">
        <div class="col-md-4"></div>
        <div class="col-md-4 text-center">
            <a href=<?php echo $link_menu1 ?>>
                <img src=<?php echo $img_logo ?> alt=""></a>
        </div>
        <div class="col-md-4"></div>
    </div>
    <br>
    <div class="row w-100">
        <div class="col-md-4"></div>
        <div class="col-md-4 text-center">
            <h5><?php echo $name_web ?></h5>
        </div>
        <div class="col-md-4"></div>
    </div>
    <br>
    <div class="row w-100">
        <div class="col-md-4"></div>
        <div class="col-md-4 text-center">
            <p class="text-center">Copyright © <?php echo date("Y"); ?> <?php echo $name_title ?> . All Rights Reserved.</p>
        </div>
        <div class="col-md-4"></div>
    </div>

    <script>
        $('li').hover(function() {
            $(this).addClass('active');
        }, function() {
            $(this).removeClass('active');
        })

        var owl = $('.owl-carousel');
        owl.owlCarousel({
            items: 7,
            loop: true,
            autoplay: true,
            autoplayTimeout: 2000,
            autoplayHoverPause: true
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>

</html>