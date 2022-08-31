<?php
include 'includes/configImgs.php';
include 'includes/configLinks.php';
error_reporting(0);

$p = $_GET['page'];
$gg;
if ($p == 1) {
    $gg = 1;
} elseif ($p == 2) {
    $gg = 2;
} elseif ($p == 3) {
    $gg = 3;
} else {
    $gg = 0;
}
$background_title = "#16181a";
$background_icon = "#fa4f00";
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
    <link rel='icon' type='image/x-icon' href='./assets/imgs/logo.png'>
    <!-- <link href = '/includes/styles.css' rel = 'stylesheet'> -->
    <link rel='stylesheet' href='./includes/styles.css' crossorigin='anonymous'>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title><?php echo $name_web ?></title>
</head>

<body>

    <div class="d-flex ">
        <div class="flex-grow-1 p-2">
            <div class="img-h">
                <img class="b-block h-100" src=<?php echo $img_logo ?> alt="">
            </div>
        </div>
        <div class="d-flex">
            <button class="btn-sn">เข้าสู่ระบบ</button>
            <button class="btn-su">สมัครสมาชิก</button>
        </div>
    </div>
    <div class="container px-5">
        <br>
        <div class="row">
            <div class="col-md-6 text-center">
                <div class="d-flex justify-content-center align-items-center">
                    <div class="menu-title">
                        <div class="icons" style="background-color:<?php echo $background_title ?>;color:<?php echo $background_icon ?>;">
                            <i class="bi bi-house-fill"></i>
                        </div>
                        <h5>หน้าหลัก</h5>
                    </div>
                    <div class="menu-title">
                        <div class="icons" style="background-color:<?php echo $background_title ?>;color:<?php echo $background_icon ?>;">
                            <i class="bi bi-currency-exchange"></i>
                        </div>
                        <h5>รับรายได้</h5>
                    </div>
                    <div class="menu-title">
                        <div class="icons" style="background-color:<?php echo $background_title ?>;color:<?php echo $background_icon ?>;">
                            <i class="bi bi-play-circle-fill"></i>
                        </div>
                        <h5>ทดลองเล่น</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-6 text-center">
                <div class="d-flex justify-content-center align-items-center">
                    <div class="menu-title">
                        <div class="icons" style="background-color:<?php echo $background_title ?>;color:<?php echo $background_icon ?>;">
                            <i class="bi bi-bookmark-star-fill"></i>
                        </div>
                        <h5>โปรโมชั่น</h5>
                    </div>
                    <div class="menu-title">
                        <div class="icons" style="background-color:<?php echo $background_title ?>;color:<?php echo $background_icon ?>;">
                            <i class="bi bi-card-heading"></i>
                        </div>
                        <h5>บทความ</h5>
                    </div>
                    <div class="menu-title">
                        <div class="icons" style="background-color:<?php echo $background_title ?>;color:<?php echo $background_icon ?>;">
                            <i class="bi bi-headset"></i>
                        </div>
                        <h5>ติดต่อเรา</h5>
                    </div>
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
    <br>
    <div class="container">
        <div class="row ">
            <div class="col-md-6 px-5">
                <img class="b-block w-100 box-add" src=<?php echo $img_add1 ?> alt="">
            </div>
            <div class="col-md-6 px-5">
                <img class="b-block w-100 box-add" src=<?php echo $img_add2 ?> alt="">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 p-5 ">
                <div class="box-gray px-5">
                    <img class="b-block w-100" src=<?php echo $img_select1 ?> alt="">
                </div>
            </div>
            <div class="col-md-4 p-5 ">
                <div class="box-gray px-5">
                    <img class="b-block w-100" src=<?php echo $img_select2 ?> alt="">
                </div>
            </div>
            <div class="col-md-4 p-5 ">
                <div class="box-gray px-5">
                    <img class="b-block w-100" src=<?php echo $img_select3 ?> alt="">
                </div>
            </div>
        </div>
        <div class="row box-black">
            <div class="p-3">
                <h4 class="text-center base-color"><?php echo $name_web ?></h4>
                <span>
                    <?php echo $name_ ?> เว็บพนันออนไลน์ สล็อต คาสิโนออนไลน์ สมัยใหม่ที่มีระบบให้บริการ ที่เป็นมาตรฐานสากล
                    ด้วยระบบอัตโนมัติพร้อมทีมงานคอยให้คำปรึกษาตลอด 24 ชั่วโมง ด้านบริการ เรามีเกมส์สล็อตและเกมส์คาสิโน จากค่ายเกมส์ชั่นนำทั่วโลก
                    ที่มีความมั่นคงสูง เชื่อถือได้และเป็นที่ยอมรับในระดับสากลไว้มากที่สุด ที่สำคัญไม่ต้องคอยโยกเงินขณะเปลี่ยนไปเล่นเกมส์อื่นให้ยุ่งยาก ลูกค้าสามารถมั่นใจได้ว่า
                    ท่านสามารถใช้บริการที่นี่ได้โดยไม่ต้องหาเว็บอื่นๆในประเทศไทยอีกแล้ว</span>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-6 p-2 text-center">
                <p class="base-color">ช่องทางการจ่ายเงิน</p>
                <div class="d-flex flex-wrap justify-content-center">
                    <div class="img-bank m-2">
                        <img class="d-block h-100" src=<?php echo $img_blank1 ?> alt="">
                    </div>
                    <div class="img-bank m-2">
                        <img class="d-block h-100" src=<?php echo $img_blank2 ?> alt="">
                    </div>
                    <div class="img-bank m-2">
                        <img class="d-block h-100" src=<?php echo $img_blank3 ?> alt="">
                    </div>
                    <div class="img-bank m-2">
                        <img class="d-block h-100" src=<?php echo $img_blank4 ?> alt="">
                    </div>
                    <div class="img-bank m-2">
                        <img class="d-block h-100" src=<?php echo $img_blank5 ?> alt="">
                    </div>
                    <div class="img-bank m-2">
                        <img class="d-block h-100" src=<?php echo $img_blank6 ?> alt="">
                    </div>
                    <div class="img-bank m-2">
                        <img class="d-block h-100" src=<?php echo $img_blank7 ?> alt="">
                    </div>
                    <div class="img-bank m-2">
                        <img class="d-block h-100" src=<?php echo $img_blank8 ?> alt="">
                    </div>
                    <div class="img-bank m-2">
                        <img class="d-block h-100" src=<?php echo $img_blank9 ?> alt="">
                    </div>
                    <div class="img-bank m-2">
                        <img class="d-block h-100" src=<?php echo $img_blank10 ?> alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-3 p-2 text-center">
                <p class="base-color">ความปลอดภัย</p>
                <div class="d-flex flex-wrap justify-content-center">
                    <div class="seq m-2">
                        <img class="d-block h-100" src=<?php echo $img_seq1 ?> alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-3 p-2 text-center">
                <p class="base-color">ติดต่อเรา</p>
                <div class="d-flex flex-wrap justify-content-center">
                    <div class="seq m-2">
                        <img class="d-block h-100" src=<?php echo $img_seq2 ?> alt="">
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="row text-center">
            <div class="col-md-6 p-2">
                <p class="base-color">คาสิโนออนไลน์</p>
                <div class="d-flex flex-wrap justify-content-center">
                    <div class="casino m-2">
                        <img class="d-block h-100" src=<?php echo $img_casino_1 ?> alt="">
                    </div>
                    <div class="casino m-2">
                        <img class="d-block h-100" src=<?php echo $img_casino_2 ?> alt="">
                    </div>
                    <div class="casino m-2">
                        <img class="d-block h-100" src=<?php echo $img_casino_3 ?> alt="">
                    </div>
                    <div class="casino m-2">
                        <img class="d-block h-100" src=<?php echo $img_casino_4 ?> alt="">
                    </div>
                    <div class="casino m-2">
                        <img class="d-block h-100" src=<?php echo $img_casino_5 ?> alt="">
                    </div>
                    <div class="casino m-2">
                        <img class="d-block h-100" src=<?php echo $img_casino_6 ?> alt="">
                    </div>
                    <div class="casino m-2">
                        <img class="d-block h-100" src=<?php echo $img_casino_7 ?> alt="">
                    </div>
                    <div class="casino m-2">
                        <img class="d-block h-100" src=<?php echo $img_casino_8 ?> alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-6 p-2">
                <p class="base-color">สล็อตออนไลน์</p>
                <div class="d-flex flex-wrap justify-content-center">
                    <div class="casino m-2">
                        <img class="d-block h-100" src=<?php echo $img_slot_1 ?> alt="">
                    </div>
                    <div class="casino m-2">
                        <img class="d-block h-100" src=<?php echo $img_slot_2 ?> alt="">
                    </div>
                    <div class="casino m-2">
                        <img class="d-block h-100" src=<?php echo $img_slot_3 ?> alt="">
                    </div>
                    <div class="casino m-2">
                        <img class="d-block h-100" src=<?php echo $img_slot_4 ?> alt="">
                    </div>
                    <div class="casino m-2">
                        <img class="d-block h-100" src=<?php echo $img_slot_5 ?> alt="">
                    </div>
                    <div class="casino m-2">
                        <img class="d-block h-100" src=<?php echo $img_slot_6 ?> alt="">
                    </div>
                    <div class="casino m-2">
                        <img class="d-block h-100" src=<?php echo $img_slot_7 ?> alt="">
                    </div>
                    <div class="casino m-2">
                        <img class="d-block h-100" src=<?php echo $img_slot_8 ?> alt="">
                    </div>
                    <div class="casino m-2">
                        <img class="d-block h-100" src=<?php echo $img_slot_9 ?> alt="">
                    </div>
                    <div class="casino m-2">
                        <img class="d-block h-100" src=<?php echo $img_slot_10 ?> alt="">
                    </div>
                    <div class="casino m-2">
                        <img class="d-block h-100" src=<?php echo $img_slot_11 ?> alt="">
                    </div>
                    <div class="casino m-2">
                        <img class="d-block h-100" src=<?php echo $img_slot_12 ?> alt="">
                    </div>
                    <div class="casino m-2">
                        <img class="d-block h-100" src=<?php echo $img_slot_13 ?> alt="">
                    </div>
                    <div class="casino m-2">
                        <img class="d-block h-100" src=<?php echo $img_slot_14 ?> alt="">
                    </div>
                    <div class="casino m-2">
                        <img class="d-block h-100" src=<?php echo $img_slot_15 ?> alt="">
                    </div>
                    <div class="casino m-2">
                        <img class="d-block h-100" src=<?php echo $img_slot_16 ?> alt="">
                    </div>
                    <div class="casino m-2">
                        <img class="d-block h-100" src=<?php echo $img_slot_17 ?> alt="">
                    </div>
                    <div class="casino m-2">
                        <img class="d-block h-100" src=<?php echo $img_slot_18 ?> alt="">
                    </div>
                    <div class="casino m-2">
                        <img class="d-block h-100" src=<?php echo $img_slot_19 ?> alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer -->
    <br>
    <div class="base-hr"></div>
    <br>
    <div class="row w-100 mt-2">
        <div class="col-md-4"></div>
        <div class="col-md-4 text-center">
            <img src=<?php echo $img_logo ?> alt="">
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>