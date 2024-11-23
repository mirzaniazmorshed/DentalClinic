<?php 
include 'components/connect.php';

if (isset($_COOKIE['user_id'])) {
    $user_id = $_COOKIE['user_id'];
} else {
    $user_id = '';
    
}
$select_service = $conn->prepare("SELECT * FROM `services`");
$select_service->execute();
$fetch_service_count = $select_service->rowCount(); 

$select_employee = $conn->prepare("SELECT * FROM `employee`");
$select_employee->execute();
$fetch_employee_count = $select_employee->rowCount(); 



$select_appointment = $conn->prepare("SELECT * FROM `appointments`"); 
$select_appointment->execute();
$fetch_appointment = $select_appointment->rowCount();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DentiCare - Dental Clinic Website</title>

    <!-- Font Awesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="../css/user_style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
	<link rel="icon" href="../image/favicon.ico" type="image/x-icon">

</head>
<body>

  <?php include 'components/user_header.php';?>
<!-- Home slider start -->
    <div class="slider-container">
        <div class="slide">
            <!-- Slid start -->
            <div class="slideBox">
                <div class="textBox">
                    <span>committed to excellence</span>
                    <h1>personalize and <br> comferatbale</h1>
                    <div class="card">
                        <div class="box">
                            <div><img src="image/icon (11).png" alt=""></div>
                            <div>
                                <h2>full protection</h2>
                                <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet consectetur.</p>
                            </div>
                        </div>
                        <div class="box">
                            <div><img src="image/icon (12).png" alt=""></div>
                            <div>
                                <h2>Complete service</h2>
                                <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet consectetur.</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex-btn">
                        <a href="service.php" class="btn">view our service</a>
                        <a href="service.php" class="btn">book apointment</a>

                    </div>
                </div>
            </div>
            <!-- slide end -->
             <!-- Slid start -->
            <div class="slideBox">
                <div class="textBox">
                    <span>committed to excellence</span>
                    <h1>personalize and <br> comferatbale</h1>
                    <div class="card">
                        <div class="box">
                            <div><img src="image/icon (4).png" alt=""></div>
                            <div>
                                <h2>full protection</h2>
                                <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet consectetur.</p>
                            </div>
                        </div>
                        <div class="box">
                            <div><img src="image/icon (5).png" alt=""></div>
                            <div>
                                <h2>Complete service</h2>
                                <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet consectetur.</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex-btn">
                        <a href="service.php" class="btn">view our service</a>
                        <a href="service.php" class="btn">book apointment</a>

                    </div>
                </div>
            </div>
            <!-- slide end -->
             <!-- Slid start -->
            <div class="slideBox">
                <div class="textBox">
                    <span>committed to excellence</span>
                    <h1>personalize and <br> comferatbale</h1>
                    <div class="card">
                        <div class="box">
                            <div><img src="image/icon (1).png" alt=""></div>
                            <div>
                                <h2>full protection</h2>
                                <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet consectetur.</p>
                            </div>
                        </div>
                        <div class="box">
                            <div><img src="image/icon (2).png" alt=""></div>
                            <div>
                                <h2>Complete service</h2>
                                <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet consectetur.</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex-btn">
                        <a href="service.php" class="btn">view our service</a>
                        <a href="service.php" class="btn">book apointment</a>
                    </div>
                </div>
            </div>
            <!-- slide end -->
        </div>
        <ul class="controls">
            <li onclick="nextSlide();" class="next"><i class="bx bx-right-arrow-alt"></i></li>

            <li onclick="prevSlide();" class="prev"><i class="bx bx-left-arrow-alt"></i></li>
        </ul>
    </div>
<!-- Home slider end -->

  <?php include 'components/user_footer.php';?>

    <!-- SweetAlert CDN Link -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

    <!-- Custom JS Link -->
    <script type="text/javascript" src="/js/user_script.js"></script>

    <?php include '/components/alert.php'; ?>
</body>
</html>
