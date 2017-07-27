<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
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
        <link rel="stylesheet" href="css/styleindex.css">
        <style>
            img{
                width:150px;
                height:150px;
            }
        </style>
    </head>
    <body>
        <div class="reg1">
            <h1>welcome</h1>
            <div>
                <a href="register.php"><button id="register">Register</button></a>
               <a href='login.php'> <button id="login">Login</button></a>
            </div>
           
            </div> 
         <div id='userdetails'>
                
                
            <?php
                
                include ('connect-mysql.php');
                
                $sqlquery = "SELECT * FROM user_details";
                
                $result = mysqli_query($dbcon,$sqlquery) or die("Querey not executed");
                
               
                echo "<table border-collapse=collapse>";
                echo"<tr style='background-color:gray;'><th>NAME</th><th>PICTURE</th><th>DATE OF REGISTRATION</th></tr>";
                while ($rows = mysqli_fetch_assoc ($result)){
                    
                     $name = $rows['user_name'];
                     $pic=$rows['user_pic'];
                     $date= $rows['user_date'];
                    
                  
                    echo "<tr><td> $name</td>";
                   
                    echo "<td><img src='$pic'></td>";
                    echo "<td> $date</td></tr>";
                                        
                
             
                }
                  echo "</table>";  
           ?>
            </div>
   
</body>
</html>
