<?php
    if(empty($_GET["ref"]) OR empty($_GET["ref"]) OR empty($_GET["search"])) {
        echo '<script>window.location.replace("/");</script>';
        die();
    }
    include("db.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>ระบบตรวจสอบคะแนน โรงเรียนภูเขียว</title>
    <meta name="description" content="ตรวจสอบคะแนนสอบต่าง ๆ ของโรงเรียนภูเขียว">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>

<body>
    <!-- Start: row > 0 -->
    <div class="d-xl-flex flex-column justify-content-xl-center align-items-xl-center" style="min-height: 100vh;width: 100vw;">
        <div><img src="assets/img/logo.png" style="width: 150px;"></div>
        <div>
            <h3 class="text-center mt-3">ระบบตรวจสอบคะแนน โรงเรียนภูเขียว</h3><!-- Start: Card Container -->
            <div style="width: 100%;max-width: 1200px;">
                <div class="card">
                    <div class="card-body">
                        <form action="info.html" method="post">
                            <h4>คะแนนสอบห้องเรียนพิเศษ ปีการศึกษา 2566</h4>
                            <h6 class="text-muted mb-2">ตรวจสอบคะแนนการรับนักเรียนรอบห้องเรียนพิเศษ ปีการศึกษา 2566</h6>
                            <div>
                                <p>ชื่อ - สกุล :&nbsp;<br>คะแนนที่ได้ :&nbsp;<br>อันดับ :&nbsp;</p>
                            </div>
                            <div class="text-end mt-2"><a class="btn btn-success" role="button" href="/"><i class="fas fa-home"></i>&nbsp;หน้าแรก</a></div>
                        </form>
                    </div>
                </div>
            </div><!-- End: Card Container -->
        </div>
    </div><!-- End: row > 0 -->
    <!-- Start: row = 0 -->
    <div class="d-xl-flex flex-column justify-content-xl-center align-items-xl-center" style="min-height: 100vh;width: 100vw;background: var(--bs-gray-300);">
        <h3>ไม่พบข้อมูลของ 00000</h3><a class="btn btn-primary" role="button" href="search.html"><i class="fas fa-chevron-left"></i>&nbsp;ย้อนกลับ</a>
    </div><!-- End: row = 0 -->
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>