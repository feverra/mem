<!DOCTYPE html>
<html lang="th">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="MyMK" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="title" content="หน้าแรก - Home ">
    <meta name="description" content="สมาชิก MK บัตร Red, Black, Diamond และสามารถซื้อบัตรสมาชิกออนไลน์ได้ เพื่อรับสิทธิพิเศษต่างๆจากทาง MK">
    <meta name="keywords" content="สมาชิก, สมาชิกเอ็มเค, สมาชิกMK, thisismymk, mymk, บัตรสมาชิก, บัตรสมาชิกเอ็มเค, บัตรสมาชิก, myMK, MK member card">
    <meta property="og:title" content=" หน้าแรก - Home thisisMyMK ">
    <meta property="og:description" content="หน้าแรก - Home thisisMyMK ">
    <meta property="og:url" content="https://www.thisismymk.com ">
    <meta property="og:site_name" content="MyMK Member Card : บัตรสมาชิกเอ็มเค">
    <meta property="og:image" content="https://www.thisismymk.com/imgs/logo.png">
    <meta name="csrf-token" content="">
    <title>MyMK หน้าแรก</title>
    <link rel="shortcut icon" href="https://www.thisismymk.com/imgs/favicon.ico">
    <link href="https://www.thisismymk.com/css/app.css" rel="stylesheet">
    <link href="css/mymk.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://www.thisismymk.com/css/splide.min.css" rel="stylesheet">
    <script src="https://www.thisismymk.com/js/sweetalert2.all.min.js"></script>
    <script src="https://www.thisismymk.com/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="js/qrcode.min.js"></script>
    <link href="https://www.thisismymk.com/css/splide.min.css" rel="stylesheet">
    <script src="https://www.thisismymk.com/js/sweetalert2.all.min.js"></script>
</head>

<body class="stretched bg-white">
    <header>
        <nav class="navbar navbar-light bg-white fixed-top navbar-expand-md bottom-shadow">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="https://www.thisismymk.com/imgs/logo.png" alt="Logo" alt="" width="80" height="60">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel"></h5>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3 text-center">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">หน้าแรก</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="https://www.thisismymk.com/th/profile">ข้อมูลส่วนตัว</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="https://www.thisismymk.com/th/order-history">ประวัติการซื้อบัตรสมาชิก</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="https://www.thisismymk.com/th/change-password">เปลี่ยนรหัสผ่าน</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="https://www.mkrestaurant.com/th/card" target="_blank">ประเภทบัตรสมาชิก MK</a>
                            </li>
                            <li class="nav-item d-block d-sm-none d-sm-block d-md-none">
                                <a class="nav-link " aria-current="page" href="https://www.thisismymk.com/th/contact">ติดต่อเรา</a>
                            </li>
                            <li class="nav-item d-block d-sm-none d-sm-block d-md-none d-flex justify-content-center py-5">
                                <div class="col-2">
                                    <hr style="height: 2px; margin:0px;">
                                </div>
                            </li>

                            <li class="nav-item d-block d-sm-none d-sm-block d-md-none">
                                <span class="nav-link">
                                    <a aria-current="page" href="https://www.thisismymk.com/th/home">TH</a> | <a aria-current="page" href="https://www.thisismymk.com/en/home">EN</a>
                                </span>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="container-fluid pt-5 pb-1 bg-main" id="main">
            <style>
                .swal-button--confirm {
                    border-radius: 1.2rem !important;
                    font-size: 14px !important;
                    width: 80px !important;
                    padding: 5px 19px !important;
                }
            </style>
            <script src="https://www.thisismymk.com/js/canvas-circular-countdown.js"></script>
            <script src="https://www.thisismymk.com/js/countime.js"></script>
            <script>
                var ct = [];
                var ct2 = [];
                var card_id = '5323531292873109';
                var red = 'https://www.thisismymk.com/imgs/mk/89'
                var black = 'https://www.thisismymk.com/imgs/mk/59'
                var diamond = 'https://www.thisismymk.com/imgs/mk/60'
                var university = 'https://www.thisismymk.com/imgs/mk/60'
                var black_upgrade = 'https://www.thisismymk.com/imgs/mk/up_black.png'
                var diamond_upgrade = 'https://www.thisismymk.com/imgs/mk/up_diamond.png'
            </script>
            <div class="row justify-content-center pt-5">
                <div class="col-12 pt-2">
                    <div id="carouselCard" class="carousel slide" data-bs-ride="carousel" data-bs-interval="false">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselCard" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselCard" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item w-100  active ">
                                <div class="row text-center">
                                    <div class="area1"></div>
                                    <div class="card loginfm shadow-sm card-radius" id="card">
                                        <div class="flip-card" name="5323531292873109">
                                            <div class="flip-card-inner">
                                                <div class="flip-card-front">
                                                    <div class="avatar mx-auto">
                                                        <img src="https://www.thisismymk.com/imgs/mk/89" class="img-fluid">
                                                    </div>
                                                </div>
                                                <div class="flip-card-back">
                                                    <div class="avatar mx-auto back-card">
                                                        <img src="https://www.thisismymk.com/imgs/mk/89_back" class="img-fluid">

                                                        <div class="d-none d-md-block">
                                                            <div class="row" style="position: relative;bottom: 270px;">
                                                                <div class="col-6">
                                                                    <div id="qrcode"></div>
                                                                </div>
                                                                <div class="col-6">
                                                                    <div class="row">
                                                                        <div class="col-4 mt-5">
                                                                            <img src="https://www.thisismymk.com/imgs/mk/duck_jump.gif" width="120">
                                                                        </div>
                                                                    </div>
                                                                    <div class="timecout-d" name="d-5323531292873109" id="countdown-canvas-5323531292873109">
                                                                    </div>
                                                                </div>
                                                                <div class="row mt-2">
                                                                    <div class="col-6">
                                                                        5323531292873109
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-12 text-center" style="position: absolute;bottom: -40px;font-size:14px;">
                                                                        ไม่รับ QR Code ที่ได้มาจากการ Screen Capture </div>
                                                                    <div class="text-end" style="position: relative;bottom: -10px;">
                                                                        <span id="clock-d-5323531292873109"></span>
                                                                        <span>21/07/2024</span>
                                                                    </div>
                                                                    <script>
                                                                        ct[card_id] = new CanvasCircularCountdown(document.getElementById('countdown-canvas-' + 5323531292873109), {
                                                                            duration: 100 * 1000,
                                                                            radius: 40,
                                                                            progressBarWidth: 10,
                                                                            progressBarOffset: 0,
                                                                            circleBackgroundColor: '#fbd2d3',
                                                                            emptyProgressBarBackgroundColor: '#b9c1c7',
                                                                            filledProgressBarBackgroundColor: pickColorByPercentage,
                                                                            captionColor: pickColorByPercentage,
                                                                            captionFont: '22px serif',
                                                                            showCaption: true,
                                                                            captionText: pickTime
                                                                        }, (percentage, time, instance) => {
                                                                            if (time.elapsed >= 5000) {

                                                                            }
                                                                        });
                                                                        var clockd = document.getElementById('clock-d-' + card_id);

                                                                        function clockTimeD() {
                                                                            var d = new Date();
                                                                            var m = d.getMinutes();
                                                                            var h = d.getHours();
                                                                            document.getElementById('clock-d-' + card_id).textContent =
                                                                                ("0" + h).substr(-2) + ":" + ("0" + m).substr(-2);
                                                                        }

                                                                        setInterval(clockTimeD, 1000);
                                                                    </script>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="d-block d-md-none">
                                                            <div class="row" style="position: relative;bottom: 140px;">
                                                                <div class="col-5 offset-1" style="text-align:center;">
                                                                    <div id="qrcode2"></div>
                                                                </div>
                                                                <div class="col-6">
                                                                    <div class="row">
                                                                        <div class="col-5 mt-2">
                                                                            <img src="https://www.thisismymk.com/imgs/mk/duck_jump.gif" width="80">
                                                                        </div>
                                                                    </div>
                                                                    <div class="timecout-m" name="m-5323531292873109" id="countdown-canvas-mb-5323531292873109">
                                                                    </div>
                                                                </div>
                                                                <div class="row mt-2">
                                                                    <div class="col-8" style="font-size:0.7rem;">
                                                                        5323531292873109
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-12" style="position: absolute;bottom: -7px;font-size:10px;">
                                                                        ไม่รับ QR Code ที่ได้มาจากการ Screen Capture </div>
                                                                    <div class="text-end" style="position: relative;bottom: 5px;font-size:10px;">
                                                                        <span id="clock-m-5323531292873109"></span>
                                                                        <span>21/07/2024</span>
                                                                    </div>
                                                                    <script>
                                                                        ct2[card_id] = new CanvasCircularCountdown(document.getElementById('countdown-canvas-mb-' + card_id), {
                                                                            duration: 100 * 1000,
                                                                            radius: 20,
                                                                            progressBarWidth: 5,
                                                                            progressBarOffset: 0,
                                                                            circleBackgroundColor: '#fbd2d3',
                                                                            emptyProgressBarBackgroundColor: '#b9c1c7',
                                                                            filledProgressBarBackgroundColor: pickColorByPercentage,
                                                                            captionColor: pickColorByPercentage,
                                                                            captionFont: '18px serif',
                                                                            showCaption: true,
                                                                            captionText: pickTime
                                                                        }, (percentage, time, instance) => {
                                                                            if (time.elapsed >= 5000) {

                                                                            }
                                                                        });

                                                                        function clockTimeM() {
                                                                            var d = new Date();
                                                                            var m = d.getMinutes();
                                                                            var h = d.getHours();
                                                                            document.getElementById('clock-m-' + card_id).textContent =
                                                                                ("0" + h).substr(-2) + ":" + ("0" + m).substr(-2);
                                                                        }
                                                                        setInterval(clockTimeM, 1000);
                                                                    </script>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="card-body">
                                                <div>
                                                    <h6>คลิกที่บัตรสมาชิกเพื่อสแกนบัตร</h6>
                                                </div>
                                                <div class="row d-flex justify-content-center mt-2">
                                                    <div class="col-md-3 col-10">
                                                        <hr>
                                                    </div>
                                                </div>

                                                <div class="row d-flex justify-content-center" style="margin-top:-10px;">
                                                    <div style="font-size: 15px;">
                                                        คะแนนปรับระดับสะสม <span class="txt-red" style="font-size: 20px;">1755</span>/1200 คะแนน
                                                    </div>
                                                    <span style="font-size: 10px;"> สะสมภายใน 31/12/2024</span>
                                                </div>
                                                <div class="row d-flex justify-content-center">
                                                    <div class="col-md-3 col-10">
                                                        <hr>
                                                    </div>
                                                </div>

                                                <div class="mt-2">
                                                    <h4>- -</h4>
                                                </div>
                                                <ul class="list-inline mt-3">
                                                    <li class="list-inline-item p-divider"><a href="#" class="h5 text-success">คูปองของฉัน </a> </li>
                                                    <li class="list-inline-item "><a href="#" class="h5 text-success">แลกคะแนนสะสม </a></li>
                                                </ul>

                                                <div class="mx-auto detail-profile" style="width: 20rem; font-size:13px;">
                                                    <div class="text-start mx-1 my-2">
                                                        <div style="margin-left:8px;">
                                                            หมายเลขบัตรสมาชิก: <span class="txt-red"> 5323531292873109 </span>
                                                        </div>
                                                        <div style="margin-left:8px;">
                                                            บัตรสมาชิกหมดอายุ: <span class="txt-red"> 30/11/2024 </span>
                                                        </div>
                                                        <div style="margin-left:8px;">
                                                            คะแนนสะสมวันนี้: <span class="txt-red"> 0 </span> คะแนน </div>
                                                        <div style="margin-left:8px;">
                                                            คะแนนแลกของรางวัล: <span class="txt-red"> 303 </span> คะแนน </div>
                                                        <div style="margin-left:8px;color: #737373;">
                                                            วันหมดอายุ (คะแนนแลกของรางวัล):
                                                            <div class="ms-5">
                                                                125 คะแนน หมดอายุ
                                                                - 30/01/2025
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row d-flex justify-content-center g-2 mt-2 mb-4 ">
                                                    <a class="btn btn-back" href="#" style="margin-right: 5px;">
                                                        แก้ไขข้อมูลส่วนตัว </a>
                                                    <button class="btn btn-back history" style="margin-right: 5px;" id="btn-history" value="6357700">
                                                        ประวัติการใช้งาน </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item w-100 ">
                                <div class="row text-center">
                                    <div class="area1"></div>
                                    <div class="card loginfm shadow-sm card-radius" id="card">
                                        <div class="avatar mx-auto">
                                            <a href="#">
                                                <img src="https://www.thisismymk.com/imgs/addnew.png" class="img-fluid">
                                            </a>
                                        </div>
                                        <div style="height:500px;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselCard" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselCard" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <script>
            $(document).ready(function() {
                console.log('card_id', card_id)
                var txt = 'CARD_NO:5323531292873109|EXP:30/04/2026|DISC_RATE:CA15,CR10'
                var qrcode = QRCode({
                    msg: txt,
                    dim: 150,
                    pad: 0,
                    mtx: 3,
                    ecl: "L",
                    pal: ["#000000", "#ffffff"]
                })
                document.getElementById('qrcode').appendChild(qrcode);
                var qrcode2 = QRCode({
                    msg: txt,
                    dim: 80,
                    pad: 0,
                    mtx: 3,
                    ecl: "L",
                    pal: ["#000000", "#ffffff"]
                })
                document.getElementById('qrcode2').appendChild(qrcode2);
            });
        </script>
        <script>
            $('.flip-card').on('click', function() {
                var flipid = $(this).attr('name');
                var showtime = $("[name='d-" + flipid + "']");
                // console.log(flipid);

                if ($(this).hasClass('flipped')) {
                    ct[flipid].reset();
                    ct2[flipid].reset();

                } else {
                    ct[flipid].start();
                    ct2[flipid].start();
                }
                $(this).toggleClass('flipped')
            });
        </script>
        </div>
    </main>
    <footer class="footer mt-auto pb-2">
        <div class="d-flex justify-content-center">
            <div class="col-9 col-md-6 col-lg-6 col-xl-6 col-xxl-5">
                <hr style="height: 2px; margin:0px;">
            </div>
        </div>
        <div class="container">
            <div class="footer-font">
                <div class="d-flex justify-content-center mt-2">
                    <label>ติดต่อ MK Call Center 02-066-1000</label>
                </div>
                <div class="d-flex justify-content-center mt-1">
                    <label>จันทร์-ศุกร์: 08:00-21.00 น.</label>
                </div>
                <div class="d-flex justify-content-center mt-1">
                    <label>เสาร์-อาทิตย์ และวันหยุดนักขัตฤกษ์: 10:00-21.00 น.</label>
                </div>
                <div class="row text-center">
                    <div class="col-12 mt-1">
                        <a href="#" target="_blank">ข้อกำหนดและเงื่อนไขสำหรับเว็บไซต์</a>
                    </div>
                    <div class="col-12 mt-1">
                        <a href="https://docs.t-reg.co/b1061f38-6502-475e-9f48-f860b508c63a/PrvNtc/ประกาศความเป็นส่วนตัว.pdf" target="_blank">ประกาศความเป็นส่วนตัว</a>
                    </div>
                    <div class="col-12 mt-1">

                        <a href="https://docs.t-reg.co/b1061f38-6502-475e-9f48-f860b508c63a/PrvNtc/นโยบายการใช้คุกกี้.pdf" target="_blank">นโยบายการใช้คุกกี้</a> &nbsp;&nbsp;
                    </div>
                    <div class="col-12 mt-1">
                        <a href="#">แบบฟอร์มการขอใช้สิทธิของเจ้าของข้อมูลส่วนบุคคล</a>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center mt-2">
                <div class="social">
                    <i class="fab fa-facebook fa-2x"></i>
                    <i class="fab fa-instagram-square fa-2x"></i>
                    <i class="fab fa-youtube-square fa-2x"></i>
                </div>
            </div>
            <div class="d-flex justify-content-center footer-font mt-2">
                <span>© 2019 MK Restaurants Group PCL., All rights reserved.</span>
            </div>
        </div>
    </footer>
</body>

</html>