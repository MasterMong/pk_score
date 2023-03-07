<?php
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
    <div class="d-xl-flex flex-column justify-content-xl-center align-items-xl-center" style="min-height: 100vh;width: 100vw;">
        <div><img src="assets/img/logo.png" style="width: 150px;"></div>
        <div>
            <h3 class="text-center mt-3">ระบบตรวจสอบคะแนน โรงเรียนภูเขียว</h3><!-- Start: Card Container -->
            <div style="width: 100%;max-width: 1200px;">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">ห้องเรียนพิเศษ ปีการศึกษา 2566</h5>
                        <h6 class="text-muted card-subtitle mb-2">ตรวจสอบคะแนนการรับนักเรียนรอบห้องเรียนพิเศษ ปีการศึกษา 2566</h6>
                        <form action="search.php" method="get">
                            <input class="form-control" type="hidden" name="type" value="gifted">
                            <input class="form-control" type="hidden" name="ref" value="2566">
                            <div class="text-end"><button class="btn btn-success" type="submit"><i class="far fa-list-alt"></i>&nbsp;ตรวจสอบคะแนน</button></div>
                        </form>
                    </div>
                </div>
            </div><!-- End: Card Container -->
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>