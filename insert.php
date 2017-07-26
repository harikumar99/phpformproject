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
                $password =md5($_POST[pwd]);
                $email = $_POST[email];
                $dob = $_POST[dob];
                $mobile = $_POST[mobile];
                $gender = $_POST[gender];
                $address = $_POST[address];
                $date = date('Y-m-d');

                $sqlinsert = "INSERT INTO user_details(user_name,user_password,user_email,user_dob,user_mobile,user_gender,user_address,user_date)VALUES('$name','$password','$email','$dob','$mobile','$gender','$address','$date')";

                if (!mysqli_query($dbcon, $sqlinsert)) {

                    die("Error in inserting new record");
                } else {
                    echo "<h2>Registration Successfully Done !!</h2> <br>";
                    echo "<a href='login.php'>Click here</a> to return  Login page";
                }
            }
            ?>
        </div>
        </div>

    </body>
</html>


