<?php
if (empty($_GET["year"]) or empty($_GET["cid"]) or empty($_GET["type"])) {
    echo '<script>window.location.replace("/");</script>';
    die();
}
include("db.php");
$year = $_GET['year'];
$cid = $_GET['cid'];
$type_code = $_GET['type'];

$sql_type = "SELECT * FROM types WHERE `year` = $year AND `code` = '$type_code'";
$query = mysqli_query($mysql, $sql_type);
$result_type = mysqli_fetch_object($query);
if ($query->num_rows >= 1 AND $result_type->enabled == 1) {
    $sql = "SELECT * FROM `students` WHERE year = '" . mysqli_real_escape_string($mysql, $year) . "' AND cid = '" . mysqli_real_escape_string($mysql, $cid) . "' AND type_code = '" . mysqli_real_escape_string($mysql, $type_code) . "' ";
    $query = mysqli_query($mysql, $sql);
    $result = mysqli_fetch_object($query);
}



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
    <!-- Start: row > 0 -->
    <?php
    if ($query->num_rows >= 1 AND $result_type->enabled == 1) { ?>
        <div class="d-flex flex-column justify-content-center align-items-center" style="min-height: 100vh;">
            <div><img src="assets/img/logo.png" style="width: 120px;"></div>
            <div>
                <h3 class="text-center mt-3">ระบบตรวจสอบคะแนน โรงเรียนภูเขียว</h3><!-- Start: Card Container -->
                <div style="width: 100%;max-width: 1200px;" class="px-4">
                    <div class="card">
                        <div class="card-body">
                            <form action="info.html" method="post">
                                <h4>คะแนนสอบ<?php echo $result_type->title ?></h4>
                                <div>

                                    <p><b>รายการที่สมัคร</b> : <?php echo $result->class ?></p>
                                    <p><b>เลขประจำตัวผู้สอบ</b> : <?php echo $result->reg_id ?></p>
                                    <p><b>ชื่อ - สกุล</b> : <?php echo $result->full_name ?></p>
                                    <p><b>จากโรงเรียน</b> : <?php echo $result->from ?></p>
                                    <p><b>คะแนน</b>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <?php if ($result->score_sci !== null) {?>
                                                    <td scope="col">วิทยาศาสตร์ ฯ</td>
                                                <?php } ?>
                                                <?php if ($result->score_math !== null) {?>
                                                    <td scope="col">คณิตศาสตร์</td>
                                                <?php } ?>
                                                <?php if ($result->score_eng !== null) {?>
                                                    <td scope="col">ภาษาอังกฤษ</td>
                                                <?php } ?>
                                                <?php if ($result->score_thai !== null) {?>
                                                    <td scope="col">ภาษาไทย</td>
                                                <?php } ?>
                                                <?php if ($result->score_social !== null) {?>
                                                    <td scope="col">สังคม ฯ</td>
                                                <?php } ?>
                                                <td scope="col">รวม</td>
                                            </tr>
                                        </thead>
                                        <tr>
                                            <?php if ($result->score_sci !== null) {?>
                                                <td><?php echo $result->score_sci ?></td>
                                            <?php } ?>
                                            <?php if ($result->score_math !== null) {?>
                                                <td><?php echo $result->score_math ?></td>
                                            <?php } ?>
                                            <?php if ($result->score_eng !== null) {?>
                                                <td><?php echo $result->score_eng ?></td>
                                            <?php } ?>
                                            <?php if ($result->score_thai !== null) {?>
                                                <td><?php echo $result->score_thai ?></td>
                                            <?php } ?>
                                            <?php if ($result->score_social !== null) {?>
                                                <td><?php echo $result->score_social ?></td>
                                            <?php } ?>
                                            <td><?php echo $result->score_sum ?></td>
                                        </tr>
                                    </table>
                                    </p>
                                    <p><b>หมายเหตุ</b> : <?php echo $result->note ?></p>
                                </div>
                                <div class="text-end mt-2"><a class="btn btn-success" role="button" href="/"><i class="fas fa-home"></i>&nbsp;หน้าแรก</a></div>
                            </form>
                        </div>
                    </div>
                </div><!-- End: Card Container -->
            </div>
        </div>
    <?php } else ?>
    <!-- End: row > 0 -->

    <!-- Start: row = 0 -->
    <?php
    { ?>
        <div class="d-flex flex-column justify-content-center align-items-center p-0 m-0" style="min-height: 100vh; background: var(--bs-gray-300);">
            <h3> ไม่พบข้อมูลของ <?php echo $cid ?></h3><a class="btn btn-primary" role="button" href="/"><i class="fas fa-chevron-left"></i>&nbsp;กลับหน้าแรก</a>
    <?php } ?>
        </div><!-- End: row = 0 -->
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>