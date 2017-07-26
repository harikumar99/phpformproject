
<html>
    <head>
        <title>Welcome</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <link rel="stylesheet" href='css/loginstyle.css'>
       
    </head>
    <body>
        <div class="reg1">
            <h1>welcome to login page</h1>
            <form method="POST" action="login.php">
                <div class="field">
                    <div class="namefield">
                        <label>Name</label>
                    </div>
                    <div class="textfield">
                        <input type="text" name="name" id="name" required>

                    </div>
                </div>

                <div class="field">
                    <div class="namefield">
                        <label>Password</label>
                    </div>
                    <div class="textfield">
                        <input type="password" name="pwd" id="pwd" required>

                    </div>
                </div>
                 
                     <div class="textfield"> <a href="register.php"> Not a memeber Click here </a></div>
                <div class="textfield">
                    <?php
                    if (isset($_POST[submit])) {
                        include('connect-mysql.php');
                        $name = $_POST[name];
                        $pass = md5($_POST[pwd]);

                        $sqlquery = "SELECT * FROM user_details WHERE user_name='$name' and user_password='$pass'";

                        $result = mysqli_query($dbcon, $sqlquery);

                        if (mysqli_num_rows($result) == 1) {
                            session_start();

                            header('location:userinformation.php');
                            $_SESSION['username'] = $name;
                        } else {
                            echo "wrong username/password";
                        }
                    }
                    ?>
                </div>
                
                <button id ='submit' name='submit'>login</button>
            </form>

        </div>


    </body>
</html>
