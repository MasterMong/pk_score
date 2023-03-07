<?php
    if(empty($_GET["ref"]) OR empty($_GET["ref"])) {
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
    <div class="d-xl-flex flex-column justify-content-xl-center align-items-xl-center" style="min-height: 100vh;width: 100vw;">
        <div><img src="assets/img/logo.png" style="width: 150px;"></div>
        <div>
            <h3 class="text-center mt-3">ระบบตรวจสอบคะแนน โรงเรียนภูเขียว</h3><!-- Start: Card Container -->
            <div style="width: 100%;max-width: 1200px;">
                <div class="card">
                    <div class="card-body">
                        <form action="info.php" method="get">
                            <label class="form-label">ระบุรหัสประชาชน หรือรหัสอ้างอิง</label>
                            <input class="form-control mb-2" type="text" name="search" placeholder="รหัสประชาชน หรือรหัสอ้างอิง" autofocus="" required="" minlength="1">
                            <input class="form-control" type="hidden" name="type" value="<?php echo $_GET["type"]; ?>">
                            <input class="form-control" type="hidden" name="ref" value="<?php echo $_GET["ref"]; ?>">
                            <div class="text-end"><button class="btn btn-success" type="submit"><i class="fas fa-search"></i>&nbsp;ค้นหา</button></div>
                        </form>
                    </div>
                </div>
            </div><!-- End: Card Container -->
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>