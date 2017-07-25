<html>
    <head>
        <link rel="stylesheet" href="css/userinfostyle.css">
    </head>
    <body>
        <div class="reg1">

            <div>
                <?php
                session_start();
                include('connect-mysql.php');
                $name = $_SESSION['username'];
                if (!$_SESSION['username']) {
                    header('location:index.php');
                } else {
                    echo "<h1>Welcome," . $_SESSION['username'] . "!</h1>";
                }
                ?>
            </div>
            <div id='userinfo'>
                <?php
                $sqlselect = "SELECT * FROM user_details WHERE user_name='$name'";
                $result = mysqli_query($dbcon, $sqlselect);



                while ($rows = mysqli_fetch_assoc($result)) {

                    $name = $rows['user_name'];
                    $email = $rows['user_email'];
                    $dob = $rows['user_dob'];
                    $mobile = $rows['user_mobile'];
                    $gender = $rows['user_gender'];
                    $address = $rows['user_address'];
                    $date = $rows['user_date'];


                    echo"<div class='namefield'><label>Name:</label>  $name</div>";
                    echo "<div class='namefield'><label>Email:</label>  $email</div>";
                    echo "<div class='namefield'><label>DOB:</label>  $dob</div>";
                    echo "<div class='namefield'><label>Mobile:</label>  $mobile</div>";
                    echo "<div class='namefield'><label>Gender:</label>  $gender</div>";
                    echo "<div class='namefield'><label>Address:</label>  $address</div>";
                    echo "<div class='namefield'><label>Date of join:</label>  $date</div>";

                     }
                ?>
            </div>
            <button><a href='logout.php'>Logout</a></button>
        </div>


    </body>
</html>

