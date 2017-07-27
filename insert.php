<?php
session_start();
if($_SESSION['username'])
{
    header('location:userinformation.php');
}
?>
<html>
    <head>
        <title>Welcome</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            .reg1{
                width:30%;
                height:300px;

                margin:auto;
                background-color:	#FFFACD;
                box-shadow:  0px 0px 30px rgba(0, 0, 0, 0.22);

            }

            h2{
                margin-top:150px;
            }
        </style>



    </head>
    <body>
        <div class="reg1">   

            <div id='respnce'>

                <?php
                if ($_POST[submit]) {
                    include ('connect-mysql.php');

                    $name = $_POST[name];
                    $password = md5($_POST[pwd]);
                    $email = $_POST[email];
                    $dob = $_POST[dob];
                    $mobile = $_POST[mobile];
                    $gender = $_POST[gender];
                    $address = $_POST[address];
                    $target = "upload/";
                    $pict = $target . $_FILES['pic']['name'];
                    move_uploaded_file($_FILES['pic']['tmp_name'], $target . $_FILES['pic']['name']);
                    $date = date('Y-m-d');
                    
                    $select = "SELECT user_name,user_password FROM user_details";
                    $result = mysqli_query($dbcon, $select) or die('error');
                    while ($rows = mysqli_fetch_assoc($result)) {
                        $dbusername = $rows['user_name'];
                        $dbpassword = $rows['user_password'];
                        if ($dbusername == $name) {
                            echo "<h2>User name alreday exists</h2>";
                            echo "<a href='register.php'>Click here</a> to return  Register page";
                        } else if ($dbpassword == $password) {
                            echo "<h2>This password is already taken try another</h2>";
                            echo "<a href='register.php'>Click here</a> to return  Register page";
                        } else {

                            $sqlinsert = "INSERT INTO user_details(user_name,user_password,user_email,user_dob,user_mobile,user_gender,user_address,user_pic,user_date)VALUES('$name','$password','$email','$dob','$mobile','$gender','$address','$pict','$date')";

                            if (!mysqli_query($dbcon, $sqlinsert)) {

                                die("Error in inserting new record");
                            } else {
                                echo "<h2>Registration Successfully Done !!</h2> <br>";
                                echo "<a href='login.php'>Click here</a> to return  Login page";
                            }
                        }
                    }
                }
                ?>
            </div>
        </div>

    </body>
</html>


