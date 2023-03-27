<?php
    if(empty($_GET["year"]) OR empty($_GET["type"])) {
        echo '<script>window.location.replace("/");</script>';
        die();
    }
    include("db.php");
    $type = $_GET["type"];
    $year = $_GET["year"];
    $sql = "SELECT * FROM `types` WHERE code = '$type' AND year = '$year'";
    $query = mysqli_query($mysql, $sql);
    if ($query->num_rows == 0) {
        echo '<script>window.location.replace("/");</script>';
        die();
    }
    $result = mysqli_fetch_object($query);
?>
<!DOCTYPE html>
<html lang="th">

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
    <div class="d-flex flex-column justify-content-center align-items-center" style="min-height: 100vh;width: 100vw;">
        <div><img src="assets/img/logo.png" style="width: 120px;"></div>
        <div>
            <h3 class="text-center mt-3">ระบบตรวจสอบคะแนน โรงเรียนภูเขียว</h3><!-- Start: Card Container -->
            <div style="width: 100%;max-width: 1200px;">
                <div class="card">
                    <div class="card-body">
                        <h5>ประเภท<?php echo $result->title ?></h5>
                        <hr>
                        <form action="info.php" method="get">
                            <label class="form-label">ระบุรหัสประชาชน หรือรหัสอ้างอิง</label>
                            <input class="form-control mb-2" type="text" name="cid" placeholder="รหัสประชาชน หรือรหัสอ้างอิง" autofocus="" required="" minlength="13" maxlength="13">
                            <input class="form-control" type="hidden" name="type" value="<?php echo $type ?>">
                            <input class="form-control" type="hidden" name="year" value="<?php echo $year ?>">
                            <div class="text-end"><button class="btn btn-success" type="submit"><i class="fas fa-search"></i>&nbsp;ค้นหา</button></div>
                        </form>
                    </div>
                </div>
            </div><!-- End: Card Container -->
        </div>
    </div>
    <?php




    ?>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>