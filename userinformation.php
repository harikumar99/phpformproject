<html>
    <head>
        <style>
            .reg1{
                width:45%;
                height:750px;

                margin:auto;
                background-color:	#FFFACD;
                box-shadow:  0px 0px 30px rgba(0, 0, 0, 0.22);

            }
            h1{
                background:	#F4A460;
                text-transform: uppercase;
                color: white;
                text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;
                font-family: 'Open Sans Condensed', sans-serif;
                font-size: 18px;
                text-align: center;
                font-weight: 100;
                padding: 20px;

            }
            #userinfo
            {
                margin-left:230px;

            }

            button {  
                background-color:#000000;
                margin-top:10px;
                color: #FFFFFF;
                width:20%;
                height:50px;	
                border-radius:50px;
                margin-left:280px;
                font-family: 'Open Sans Condensed', sans-serif;
                font-size: 18px;
                text-transform: uppercase;
            }
            a{
                text-decoration: none;
                color: #FFFFFF;
            }

            .namefield{
                width:650px;
                height:50px;
                float:left;
                margin-top: 15px;
                margin-left:20px;
            }
            label{
                line-height: 50px;
                font-size: 20px;
                font-weight: bold;
                margin-left: 30px;
                color:brown;
            }

        </style>
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


                    echo
                    "<div class='namefield'><label>Name:</label>  $name</div>";
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

