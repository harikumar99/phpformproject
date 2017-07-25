<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
 
<html>
    <head>
        <title>Welcome</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            .reg1{
                width:45%;
                height:300px;

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

            button           {  
                background-color:#000000;
                margin-top:10px;
                color: #FFFFFF;
                width:20%;
                height:50px;	
                border-radius:50px;
                margin-left:150px;
                font-family: 'Open Sans Condensed', sans-serif;
                font-size: 18px;
                text-transform: uppercase;
            }
            a{
                text-decoration: none;
                 color: #FFFFFF;
            }
            #userdetails{
                
                margin-top:20px;
                margin-left: 20px;
                
            }




        </style>



    </head>
    <body>
        <div class="reg1">
            <h1>welcome</h1>
            <div>
                <button id="register"><a href="register.php">Register</a></button>
                <button id="login"><a href='login.php'>Login</a></button>
            </div>
            <div id='userdetails'>
                
                
            <?php
                
                include ('connect-mysql.php');
                
                $sqlquery = "SELECT * FROM user_details";
                
                $result = mysqli_query($dbcon,$sqlquery) or die("Querey not executed");
                
               
                echo "<table border-collapse=collapse>";
                echo"<tr style='background-color:gray;'><th>ID</th><th>NAME</th><th>EMAIL</th><th>DOB</th><th>MOBILE</th><th>GENDER</th><th>ADDRESS</th><th>DATE OF REGISTRATION</th></tr>";
                while ($rows = mysqli_fetch_assoc ($result)){
                     $id = $rows['user_id'];
                     $name = $rows['user_name'];
                     $email= $rows['user_email'];
                     $dob = $rows['user_dob'];
                     $mobile = $rows['user_mobile'];
                     $gender= $rows['user_gender'];
                     $address = $rows['user_address'];
                     $date= $rows['user_date'];
                    
                    echo "<tr style='color:navy;'><td> $id</td>";
                    echo "<td> $name</td>";
                    echo "<td> $email</td>";
                    echo "<td> $dob</td>";
                    echo "<td> $mobile</td>";
                    echo "<td> $gender</td>";
                    echo "<td> $address</td>";
                    echo "<td> $date</td></tr>";
                                        
                
             
                }
                  echo "</table>";  
           ?>
            </div>
            </div>   
    </form>
</div>
</body>
</html>
