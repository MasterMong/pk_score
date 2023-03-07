<?php
include("db.php");
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
    <div class="d-flex flex-column justify-content-center align-items-center py-5" style="min-height: calc(100vh - 279px);">
        <div><img src="assets/img/logo.png" style="width: 120px;"></div>
        <div>
            <h3 class="text-center mt-3">ระบบตรวจสอบคะแนน โรงเรียนภูเขียว</h3><!-- Start: Card Container -->
            <div style="width: 100%;max-width: 1200px;" class="px-4">
                <?php
                $sql = "SELECT * FROM `types`";
                $query = mysqli_query($mysql, $sql);
                ?>
                <?php
                if ($query->num_rows == 0) {
                    echo 'ไม่พบข้อมูล';
                } else { ?>
                    <!-- Start Loop -->
                    <?php
                    while ($result = mysqli_fetch_object($query)) { ?>

                        <div class="card my-2">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $result->title ?></h5>
                                <h6 class="text-muted card-subtitle mb-2"><?php echo $result->des ?></h6>
                                <form action="search.php" method="get">
                                    <input class="form-control" type="hidden" name="type" value="<?php echo $result->code ?>">
                                    <input class="form-control" type="hidden" name="year" value="<?php echo $result->year ?>">
                                    <div class="text-end"><button class="btn btn-success" type="submit"><i class="far fa-list-alt"></i>&nbsp;ตรวจสอบคะแนน</button></div>
                                </form>
                            </div>
                        </div>
                    <?php } ?>
                <?php } ?>

                <!-- End Loop -->

            </div><!-- End: Card Container -->
        </div>
    </div>
    <footer style="border-top: 2px solid var(--bs-pink);background: #fff5f5;">
        <div class="container">

            <div class="row" style="padding: 10px;">

                <div class="d-xl-flex justify-content-xl-start align-items-xl-center col-lg-4" style="padding: -2px;">
                    <div class="d-flex justify-content-center"><img src="assets/img/logo.png" style="width: 80px;"></div>
                    <div class="px-0 px-lg-2">
                        <h5 class="fw-semibold"><strong>โรงเรียนภูเขียว</strong></h5>
                        <p style="margin: 0;">เลขที่ 142 หมู่ที่ 4 ตำบลผักปัง อำเภอภูเขียว จังหวัดชัยภูมิ 36110</p>
                    </div>
                </div>

                <div class="col-lg-4" style="padding: -2px;">
                    <h5 class="fw-semibold">ทีมพัฒนา</h5>
                    <ul>
                        <li>นางสาวเพชรรัตน์ แก้วสมบัติ ม.5/2<br>Backend/Frontend</li>
                        <li>นางสาวดวงกมล กองพันธ์ ม.5/5<br>Backend/Frontend</li>
                        <li>นายมงคล ชนะดี<br>ที่ปรึกษา, UI/UX</li>
                    </ul>
                </div>

                <div class="col-lg-4">
                    <h5 class="fw-semibold">ลิงก์ที่เกี่ยวข้อง</h5>
                    <ul>
                        <li><a href="https://phukhieo.ac.th/">เว็บไซต์โรงเรียนภูเขียว</a></li>
                        <li><a href="https://regis.phukhieo.ac.th/">ระบบรับสมัครนักเรียน โรงเรียนภูเขียว</a></li>
                        <li><a href="https://www.facebook.com/phukhieo.ac.th">เพจโรงเรียนภูเขียว</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div style="background: var(--bs-gray-700);padding: 10px;color: var(--bs-white);">

            <p class="text-center" style="margin: 0;padding: 0;">© 2023 PHUKHIEO SCHOOL ALL RIGHT RESERVED</p>
        </div>
    </footer>

    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>