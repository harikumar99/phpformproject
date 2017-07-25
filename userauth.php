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
                background-color:#FFFACD;
                box-shadow:  0px 0px 30px rgba(0, 0, 0, 0.22);

            }

            h2{
                margin-top:150px;
                color:red;
            }
        </style>



    </head>
    <body>
        <div class="reg1">   

            <div id='respnce'>
                <?php
                include('connect-mysql.php');
                $name = $_POST[name];
                $pass = $_POST[pwd];

                $sqlquery = "SELECT * FROM user_details WHERE user_name='$name' and user_password='$pass'";

                $result = mysqli_query($dbcon, $sqlquery);

                if (mysqli_num_rows($result)==1) {
                    session_start();
                   
                    header('location:userinformation.php');
                     $_SESSION['username']= $name;
                    
                }
                  else{
                      echo "<h2>wrong username/password</h2>";
                      echo "<a href='login.php'>Click here to go Login page</a>";
                  }
              
                  
                ?>
            </div>

        </div>

    </body>
</html>


