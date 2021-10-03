<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <title>Foodycups</title>
        <meta content="" name="description">
        <meta content="" name="keywords">

        <!-- Favicons -->
        <link href="assets/img/hamburger.svg" rel="icon">
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Satisfy" rel="stylesheet">
        <!--custom-->
        <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/login.css">
        <!--custom-->
        <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
        <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
        <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="assets/css/demo.css" />
        <link rel="stylesheet" type="text/css" href="assets/css/style1.css" />
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/radiobutton.css">

    </head>
    <?php
    $name = $_POST['name'];
    $birthdate = $_POST['birthdate'];
    $city = $_POST['city'];
    $address = $_POST['address'];
    $job = $_POST['job'];
    $food = $_POST['food'];
    $burgerVSSalad = $_POST['burgerVSSalad'];
    $agegap = $_POST['Agegap'];
    $consume = $_POST['chkPassPort'];
    $why = $_POST['why'];
    $foodeveryweek = $_POST['foodeveryweek'];
    $mealplan = $_POST['mealplan'];
    $microwave = $_POST['microwave'];
    $mealtime = $_POST['mealtime'];
    $family = $_POST['family'];
    $money = $_POST['money'];
    $coupons = $_POST['coupons'];


    $servername = "localhost";
    $username = "id15958978_foodiecups";
    $password = "Chamuth@2600";
    $dbname = "id15958978_answers";


    $conn = new mysqli($servername, $username, $password, $dbname);


    $sql = "INSERT INTO answers(q1,q2,q3,q4,q5,q6,q7,q8,q9,a1,a2,a3,a4,a5,a6,a7,a8)VALUES ('$name','$birthdate','$city','$address','$job','$food','$burgerVSSalad','$agegap','$consume','$why','$foodeveryweek','$mealplan','$microwave','$mealtime','$family','$money','$coupons')";

    if ($conn->query($sql) === TRUE) {
//    echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
    ?>
    <body>
        <ul class="cb-slideshow">
            <li><span>Image 01</span><div><h3></h3></div></li>
            <li><span>Image 02</span><div><h3></h3></div></li>
            <li><span>Image 03</span><div><h3></h3></div></li>
            <li><span>Image 04</span><div><h3></h3></div></li>
        </ul>

        <a href="index.php">
            <header id="header" class="fixed-top  d-flex justify-content-center align-items-center header-transparent">

                <nav class="nav-menu d-none d-lg-block">
                    <ul>
                        <!--<li class="active"><a href="index.php">Back to Survey</a></li>-->
                    </ul>
                </nav>

            </header>

            <div>
                <section id="hero">

                    <div class="hero-container">
                        <h1>Thank you</h1>
                    </div>

                </section>
            </div>
        </a>
        <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

        <script src="assets/vendor/jquery/jquery.min.js"></script>
        <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
        <!--<script src="assets/vendor/php-email-form/validate.js"></script>-->
        <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
        <script src="assets/vendor/counterup/counterup.min.js"></script>
        <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
        <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
        <!--<script src="assets/vendor/venobox/venobox.min.js"></script>-->
        <script src="assets/js/radiobutton.js"></script>

        <script src="assets/js/main.js"></script>
    </body>

</html>


