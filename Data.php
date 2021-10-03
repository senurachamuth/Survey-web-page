<?php
include_once './sql.php';
?>
<!DOCTYPE html>
<html>
    <title>Foodie cups Data view</title>
    <link href="assets/img/hamburger.svg" rel="icon">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="w3.css">
    <link rel="stylesheet" href="CSS/bootstrap-grid.css"/>
    <link rel="stylesheet" href="CSS/bootstrap-grid.min.css"/>
    <link rel="stylesheet" href="CSS/bootstrap-reboot.css"/>
    <link rel="stylesheet" href="CSS/bootstrap-reboot.min.css"/>
    <link rel="stylesheet" href="CSS/bootstrap.css"/>
    <link rel="stylesheet" href="CSS/bootstrap.min.css"/>
    <!--<link rel="stylesheet" href="CSS/Scroll.css"/>-->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <style>
        a:link {
            text-decoration: none;
        }

        a:visited {
            text-decoration: none;
        }

        table {
            border-collapse: collapse;
            border-spacing: 0;
            width: 100%;
            border: 2px solid #ddd;
            background-color: #ffeeff;
        }

        th, td {
            text-align: left;
            padding: 2.40px;
        }

        tr:nth-child(even){background-color: #ffc8ff}
    </style>

    <script>
        $(document).ready(function () {
            $('[data-toggle="popover"]').popover();
        });
    </script>

    <body>

        <div class="w3-container">

            <!--<table class=" w3-table w3-bordered">-->
            <table style="overflow-x:auto;" class="table-bordered">
                
                <?php
                $sql = "SELECT * FROM answers;";
                $result = mysqli_query($conn, $sql);
                $resultcheck = mysqli_num_rows($result);
//                //

                echo "<tr>
                    <th><a href='#' class='' data-toggle='popover'>ID&nbsp;&nbsp;</a></th>
                    <th><a href='#' class='' data-toggle='popover' title='1. Enter your Name'>Question1 </a></th>
                    <th><a href='#' class='' data-toggle='popover' title='2. Type your Birth day'>Question2&nbsp;&nbsp;</a></th>
                    <th><a href='#' class='' data-toggle='popover' title='3. Enter your City' data-placement='bottom'>Question3</a></th>
                    <th><a href='#' class='' data-toggle='popover' title='4. Enter your home Address'>Question4</a></th>
                    <th><a href='#' class='' data-toggle='popover' title='5. Enter your Job'>Question5</a></th>
                    <th><a href='#' class='' data-toggle='popover' title='6. What is your Favorite food?'>Question6 </a></th>
                    <th><a href='#' class='' data-toggle='popover' title='7. Select one between these two foods'>Question7</a></th>
                    <th><a href='#' class='' data-toggle='popover' title='8. What age category do you belong to?' >Question8</a></th>
                    <th><a href='#' class='' data-toggle='popover' title='9. Do you consume fast food?'>Question9</a></th>
                    <th><a href='#' class='' data-toggle='popover' title='10. If you select yes why? or If you select No why?'>Question10</a></th>
                    <th><a href='#' class='' data-toggle='popover' title='11. How often do you consume fast food every week?'>Question11</a></th>
                    <th><a href='#' class='' data-toggle='popover' title='12. Do you following a workout meal plan?' >Question12</a></th>
                    <th><a href='#' class='' data-toggle='popover' title='13. How often do you consume instantly made food (like noodles, canned food, frozen food, food that can be prepared easily in a microwave) at home?'>Question13</a></th>
                    <th><a href='#' class='' data-toggle='popover' title='14. Do you have a fixed mealtime that you follow?' >Question14</a></th>
                    <th><a href='#' class='' data-toggle='popover' data-placement='left' title='15. Do your family members also consume fast food?'>Question15</a></th>
                    <th><a href='#' class='' data-toggle='popover' data-placement='left' title='16. On average how much money do you spend on buying fast food per week?'>Question16</a></th>      
                </tr>
                ";
                if ($resultcheck > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
//
                        echo "<tr>" . "<td>" . $row["id"] . "</td>" . "<td>" . $row["q1"] . "</td>" . "<td>" . $row["q2"] . "</td>" . "<td>" . $row["q3"] . "</td>" . "<td>" . $row["q4"] . "</td>" . "<td>" . $row["q5"] . "</td>" . "<td>" . $row["q6"] . "</td>" . "<td>" . $row["q7"] . "</td>" . "<td>" . $row["q8"] . "</td>" . "<td>" . $row["q9"] . "</td>" . "<td>" . $row["a1"] . "</td>" . "<td>" . $row["a2"] . "</td>" . "<td>" . $row["a3"] . "</td>" . "<td>" . $row["a4"] . "</td>" . "<td>" . $row["a5"] . "</td>" . "<td>" . $row["a6"] . "</td>" . "<td>" . $row["a7"] . "</td>" . "</tr>";
                    }
                }
                ?>

            </table>
        </div>


    </body>
</html>

