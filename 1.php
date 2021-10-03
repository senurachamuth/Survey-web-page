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
        <!--<link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">-->

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

    <body>
        <ul class="cb-slideshow">
            <li><span>Image 01</span><div><h3></h3></div></li>
            <li><span>Image 02</span><div><h3></h3></div></li>
            <li><span>Image 03</span><div><h3></h3></div></li>
            <li><span>Image 04</span><div><h3></h3></div></li>
        </ul>

        <header id="header" class="fixed-top  d-flex justify-content-center align-items-center header-transparent">

            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li class="active"><a href="#hero">Home</a></li>
                    <li><a href="#survey">survey</a></li>
                </ul>
            </nav>

        </header>

        <div>
            <section id="hero">

                <div class="hero-container">
                    <h1>would you like to share how you feel about foods</h1>
                    <h2></h2>
                    <a href="#survey" class="btn-scroll scrollto" title="Scroll Down"><i class="bx bx-chevron-down"></i></a>
                </div>

            </section>
        </div>

        <!--Contain-->
        <section  id="survey" class="survey">
            <div class="container">               
                <div class="card login-card">
                    <div class="no-gutters">
                        <div class="card-body">
                            <p class="login-card-description">survey</p>
                            <div class="form-group">
                                <p class="login-card-footer-text text-dark text-left">1.&nbsp;Enter your Name</p>
                                <label for="name" class="sr-only">1.&nbsp;your Name</label>
                                <input type="text" name="Name" id="email" class="form-control" placeholder="your Name">
                            </div>
                            <div class="form-group">
                                <p class="login-card-footer-text text-dark text-left">2.&nbsp;Type your Birth day</p>
                                <label for="date" class="sr-only">Type your Birth date</label>
                                <input type="text" name="Birth date" id="Birthdate" class="form-control" placeholder="Birth date">
                            </div>
                            <div class="form-group">
                                <p class="login-card-footer-text text-dark text-left">3.&nbsp;Enter your City</p>
                                <label for="city" class="sr-only">Enter your City</label>
                                <input type="text" name="City" id="City" class="form-control" placeholder="Enter your City">
                            </div>
                            <div class="form-group">
                                <p class="login-card-footer-text text-dark text-left">4.&nbsp;Enter your home Address</p>
                                <label for="address" class="sr-only">Enter your home Address</label>
                                <input type="text" name="Address" id="Address" class="form-control" placeholder="Enter your home Address">
                            </div>
                            <div class="form-group">
                                <p class="login-card-footer-text text-dark text-left">5.&nbsp;Enter your Job</p>
                                <label for="job" class="sr-only">Enter your Job</label>
                                <input type="text" name="job" id="Address" class="form-control" placeholder="Enter your Job">
                            </div>
                            <div class="form-group">
                                <p class="login-card-footer-text text-dark text-left">6.&nbsp;What is your Favorite food?</p>
                                <label for="food" class="sr-only">What is your Favorite food?</label>
                                <input type="text" name="food" id="Address" class="form-control" placeholder="What is your Favorite food?">
                            </div>


                            <!--Radio button name BurgerVSSalad-->
                            <div class=" theme-light preload">
                                <div class="center">

                                    <p class="login-card-footer-text text-dark text-left">7.&nbsp;Select one between these two foods.</p>

                                    <div class="row">
                                        <div class="col-12 text-size text-left input input--radio input--primary">
                                            <label>
                                                <input type="radio" name="BurgerVSSalad" checked>
                                                <span class="input__box"></span>
                                                <span class="text-size">Burger</span>
                                            </label>
                                        </div>

                                        <div class="col-12 text-size text-left input input--radio input--primary">
                                            <label>
                                                <input type="radio" name="BurgerVSSalad">
                                                <span class="input__box"></span>
                                                <span class="text-size">Salad</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!--Radio button name Agegap-->
                            <div class=" theme-light preload">
                                <div class="center">

                                    <p class="login-card-footer-text text-dark text-left">8.&nbsp;What age category do you belong to?</p>

                                    <div class="row">
                                        <div class="col-12 text-size text-left input input--radio input--primary">
                                            <label>
                                                <input type="radio" name="Agegap" checked>
                                                <span class="input__box"></span>
                                                <span class="text-size">16 years or younger.</span>
                                            </label>
                                        </div>

                                        <div class="col-12 text-size text-left input input--radio input--primary">
                                            <label>
                                                <input type="radio" name="Agegap">
                                                <span class="input__box"></span>
                                                <span class="text-size">16-25.</span>
                                            </label>
                                        </div>

                                        <div class="col-12 text-left input input--radio input--primary">
                                            <label>
                                                <input type="radio" name="Agegap">
                                                <span class="input__box"></span>
                                                <span class="text-size">25-36.</span>
                                            </label>
                                        </div>

                                        <div class="col-12 text-left input input--radio input--primary">
                                            <label>
                                                <input type="radio" name="Agegap">
                                                <span class="input__box"></span>
                                                <span class="text-size">36-45.</span>
                                            </label>
                                        </div>

                                        <div class="col-12 text-left input input--radio input--primary">
                                            <label>
                                                <input type="radio" name="Agegap">
                                                <span class="input__box"></span>
                                                <span class="text-size">45-56.</span>
                                            </label>
                                        </div>

                                        <div class="col-12 text-left input input--radio input--primary">
                                            <label>
                                                <input type="radio" name="Agegap">
                                                <span class="input__box"></span>
                                                <span class="text-size">56-65.</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Radio button name consume-->
                            <div class=" theme-light preload">
                                <div class="center">

                                    <p class="login-card-footer-text text-dark text-left">9.&nbsp;;Do you consume fast food?</p>

                                    <div class="row">
                                        <div class="col-12 text-size text-left input input--radio input--primary">
                                            <label>
                                                <input type="radio" name="consume" checked>
                                                <span class="input__box"></span>
                                                <span class="text-size">Yes.</span>
                                            </label>
                                        </div>

                                        <div class="col-12 text-size text-left input input--radio input--primary">
                                            <label>
                                                <input type="radio" name="consume">
                                                <span class="input__box"></span>
                                                <span class="text-size">No.</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Radio button name Why-->
                            <div class=" theme-light preload">
                                <div class="center">

                                    <p class="login-card-footer-text text-dark text-left">10.&nbsp;If you select yes why?</p>

                                    <div class="row">
                                        <div class="col-12 text-size text-left input input--radio input--primary">
                                            <label>
                                                <input type="radio" name="why" checked>
                                                <span class="input__box"></span>
                                                <span class="text-size">They're quick.</span>
                                            </label>
                                        </div>

                                        <div class="col-12 text-size text-left input input--radio input--primary">
                                            <label>
                                                <input type="radio" name="why">
                                                <span class="input__box"></span>
                                                <span class="text-size">I'm too busy to cook.</span>
                                            </label>
                                        </div>

                                        <div class="col-12 text-left input input--radio input--primary">
                                            <label>
                                                <input type="radio" name="why">
                                                <span class="input__box"></span>
                                                <span class="text-size">I don't like homemade foods.</span>
                                            </label>
                                        </div>

                                        <div class="col-12 text-left input input--radio input--primary">
                                            <label>
                                                <input type="radio" name="why">
                                                <span class="input__box"></span>
                                                <span class="text-size">I don't know how to cook.</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div> 

                            <!--Radio button name foodeveryweek-->
                            <div class=" theme-light preload">
                                <div class="center">

                                    <p class="login-card-footer-text text-dark text-left">11.&nbsp;How often do you consume fast food every week?</p>

                                    <div class="row">
                                        <div class="col-12 text-size text-left input input--radio input--primary">
                                            <label>
                                                <input type="radio" name="foodeveryweek" checked>
                                                <span class="input__box"></span>
                                                <span class="text-size">1-2 times</span>
                                            </label>
                                        </div>

                                        <div class="col-12 text-size text-left input input--radio input--primary">
                                            <label>
                                                <input type="radio" name="foodeveryweek">
                                                <span class="input__box"></span>
                                                <span class="text-size">3-4 times</span>
                                            </label>
                                        </div>

                                        <div class="col-12 text-left input input--radio input--primary">
                                            <label>
                                                <input type="radio" name="foodeveryweek">
                                                <span class="input__box"></span>
                                                <span class="text-size">5-6 times</span>
                                            </label>
                                        </div>

                                        <div class="col-12 text-left input input--radio input--primary">
                                            <label>
                                                <input type="radio" name="foodeveryweek">
                                                <span class="input__box"></span>
                                                <span class="text-size">7 times or more</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Radio button name mealplan-->
                            <div class=" theme-light preload">
                                <div class="center">

                                    <p class="login-card-footer-text text-dark text-left">12.&nbsp;Do you following a workout meal plan?</p>

                                    <div class="row">
                                        <div class="col-12 text-size text-left input input--radio input--primary">
                                            <label>
                                                <input type="radio" name="mealplan" checked>
                                                <span class="input__box"></span>
                                                <span class="text-size">Yes</span>
                                            </label>
                                        </div>

                                        <div class="col-12 text-size text-left input input--radio input--primary">
                                            <label>
                                                <input type="radio" name="mealplan">
                                                <span class="input__box"></span>
                                                <span class="text-size">No</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Radio button name microwave-->
                            <div class=" theme-light preload">
                                <div class="center">

                                    <p class="login-card-footer-text text-dark text-left">13.&nbsp;How often do you consume instantly made food (like noodles, canned food, frozen food, food that can be prepared easily in a microwave) at home?</p>

                                    <div class="row">
                                        <div class="col-12 text-size text-left input input--radio input--primary">
                                            <label>
                                                <input type="radio" name="microwave" checked>
                                                <span class="input__box"></span>
                                                <span class="text-size">1-2 times a week</span>
                                            </label>
                                        </div>

                                        <div class="col-12 text-size text-left input input--radio input--primary">
                                            <label>
                                                <input type="radio" name="microwave">
                                                <span class="input__box"></span>
                                                <span class="text-size">2-3 times a week</span>
                                            </label>
                                        </div>

                                        <div class="col-12 text-left input input--radio input--primary">
                                            <label>
                                                <input type="radio" name="microwave">
                                                <span class="input__box"></span>
                                                <span class="text-size">3-4 times a week</span>
                                            </label>
                                        </div>

                                        <div class="col-12 text-left input input--radio input--primary">
                                            <label>
                                                <input type="radio" name="microwave">
                                                <span class="input__box"></span>
                                                <span class="text-size">4-5 times a week</span>
                                            </label>
                                        </div>

                                        <div class="col-12 text-left input input--radio input--primary">
                                            <label>
                                                <input type="radio" name="microwave">
                                                <span class="input__box"></span>
                                                <span class="text-size">More than 5 times a week</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Radio button name mealtime-->
                            <div class=" theme-light preload">
                                <div class="center">

                                    <p class="login-card-footer-text text-dark text-left">14.&nbsp;Do you have a fixed mealtime that you follow?</p>

                                    <div class="row">
                                        <div class="col-12 text-size text-left input input--radio input--primary">
                                            <label>
                                                <input type="radio" name="mealtime" checked>
                                                <span class="input__box"></span>
                                                <span class="text-size">Yes</span>
                                            </label>
                                        </div>

                                        <div class="col-12 text-size text-left input input--radio input--primary">
                                            <label>
                                                <input type="radio" name="mealtime">
                                                <span class="input__box"></span>
                                                <span class="text-size">No</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!--Radio button name family-->
                            <div class=" theme-light preload">
                                <div class="center">

                                    <p class="login-card-footer-text text-dark text-left">15.&nbsp;Do your family members also consume fast food?</p>

                                    <div class="row">
                                        <div class="col-12 text-size text-left input input--radio input--primary">
                                            <label>
                                                <input type="radio" name="family" checked>
                                                <span class="input__box"></span>
                                                <span class="text-size">Yes</span>
                                            </label>
                                        </div>

                                        <div class="col-12 text-size text-left input input--radio input--primary">
                                            <label>
                                                <input type="radio" name="family">
                                                <span class="input__box"></span>
                                                <span class="text-size">No</span>
                                            </label>
                                        </div>

                                        <div class="col-12 text-size text-left input input--radio input--primary">
                                            <label>
                                                <input type="radio" name="family">
                                                <span class="input__box"></span>
                                                <span class="text-size">Sometimes</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Radio button name money-->
                            <div class=" theme-light preload">
                                <div class="center">

                                    <p class="login-card-footer-text text-dark text-left">16. On average how much money do you spend on buying fast food per week?</p>

                                    <div class="row">
                                        <div class="col-12 text-size text-left input input--radio input--primary">
                                            <label>
                                                <input type="radio" name="money" checked>
                                                <span class="input__box"></span>
                                                <span class="text-size">Rs &nbsp;400 - 800</span>
                                            </label>
                                        </div>

                                        <div class="col-12 text-size text-left input input--radio input--primary">
                                            <label>
                                                <input type="radio" name="money">
                                                <span class="input__box"></span>
                                                <span class="text-size">Rs &nbsp;800 - 1200</span>
                                            </label>
                                        </div>

                                        <div class="col-12 text-left input input--radio input--primary">
                                            <label>
                                                <input type="radio" name="money">
                                                <span class="input__box"></span>
                                                <span class="text-size">Rs &nbsp;1200- 1600</span>
                                            </label>
                                        </div>

                                        <div class="col-12 text-left input input--radio input--primary">
                                            <label>
                                                <input type="radio" name="money">
                                                <span class="input__box"></span>
                                                <span class="text-size">Rs &nbsp;1600-2000</span>
                                            </label>
                                        </div>
                                        <div class="col-12 text-left input input--radio input--primary">
                                            <label>
                                                <input type="radio" name="money">
                                                <span class="input__box"></span>
                                                <span class="text-size">More than Rs 2400</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Radio button name coupons-->
                            <div class=" theme-light preload">
                                <div class="center">

                                    <p class="login-card-footer-text text-dark text-left">17. Do you use discount coupons to buy fast food?</p>

                                    <div class="row">
                                        <div class="col-12 text-size text-left input input--radio input--primary">
                                            <label>
                                                <input type="radio" name="coupons" checked>
                                                <span class="input__box"></span>
                                                <span class="text-size">Always</span>
                                            </label>
                                        </div>

                                        <div class="col-12 text-size text-left input input--radio input--primary">
                                            <label>
                                                <input type="radio" name="coupons">
                                                <span class="input__box"></span>
                                                <span class="text-size">Never</span>
                                            </label>
                                        </div>

                                        <div class="col-12 text-left input input--radio input--primary">
                                            <label>
                                                <input type="radio" name="coupons">
                                                <span class="input__box"></span>
                                                <span class="text-size">Sometimes</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!--                            <div class=" theme-light preload">
                                                            <div class="center">
                            
                                                                <p class="login-card-footer-text text-dark text-left">What is your Favorite food?</p>
                            
                                                                <div class="row">
                                                                    <div class="col-12 text-size text-left input input--radio input--primary">
                                                                        <label>
                                                                            <input type="radio" name="radio--light-primary" checked>
                                                                            <span class="input__box"></span>
                                                                            <span class="text-size">Primary 1</span>
                                                                        </label>
                                                                    </div>
                            
                                                                    <div class="col-12 text-size text-left input input--radio input--primary">
                                                                        <label>
                                                                            <input type="radio" name="radio--light-primary">
                                                                            <span class="input__box"></span>
                                                                            <span class="text-size">primary 2</span>
                                                                        </label>
                                                                    </div>
                            
                                                                    <div class="col-12 text-left input input--radio input--primary">
                                                                        <label>
                                                                            <input type="radio" name="radio--light-primary">
                                                                            <span class="input__box"></span>
                                                                            <span class="text-size">primary 3</span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>-->


                            <input name="Submit" id="login" class="btn btn-block login-btn mb-4" type="button" value="Submit">

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--<main id="main">-->
        <section id="about" class="about">

        </section>


        <section id="about" class="about">

        </section>


        <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

        <!-- Vendor JS Files -->
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