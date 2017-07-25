<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Registration Form</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="css/registerstyle.css">
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/jqvalidation.js"></script>

    </head>
    <body>
        <div class="reg1">
            <h1>Registration Form</h1>
            <form method="POST" action="insert.php">
                <div class="field">
                    <div class="namefield">
                        <label>Name</label>
                    </div>
                    <div class="textfield">
                        <input type="text" name="name" id="name">
                        <span id="nameerror"></span>
                    </div>
                </div>
                
                <div class="field">
                    <div class="namefield">
                        <label>Password</label>
                    </div>
                    <div class="textfield">
                        <input type="password" name="pwd" id="pwd">
                        <span id="pwderror"></span>
                    </div>
                </div>

               <div class="field">
                    <div class="namefield">
                        <label>Email</label>
                    </div>
                    <div class="textfield">
                        <input type="text" name="email" id="email" value="">
                        <span id="emailerror"></span>
                    </div>
                </div>     
                <div class="field">
                    <div class="namefield">
                        <label>DOB</label>
                    </div>
                    <div class="textfield">
                        <input type="date" name="dob" id='dob' value="">
                        <span id="doberror"></span>
                    </div>
                </div>
                <div class="field">
                    <div class="namefield">
                        <label>Mobile</label>
                    </div>
                    <div class="textfield">
                        <input type="text" name="mobile" id="mobile" value="">
                        <span id="mobileerror"></span>
                    </div>
                </div>  
                <div class="field">

                    <div class="namefield">
                        <label>Gender</label>
                    </div>
                    <div class="textfield">
                        <input id="gender" type="radio" name="gender" value="Male">Male
                        <input id="gender" type="radio" name="gender" value="Female">Female<br>
                        <span id="generror"></span>
                    </div>
                </div>
               <!--<div class="field">

                    <div class="namefield">
                        <label>Picture</label>
                    </div>
                    <div class="textfield">
                        <input id="pic" type="file" name="pic" value="">
                        <span id="picerror"></span>

                    </div>
                </div>-->

                <div class="field">
                    <div class="namefield">
                        <label>Address</label>
                    </div>
                    <div class="textfield">
                        <textarea id="address" name='address' value=""></textarea>
                        <span id="addresserror"></span>
                    </div>

                </div>
                <div class="field">

                    <button id="submit" name="submit" value='submit'>SUBMIT</button>
                </div>   
            </form>

        </div>

    </body>
</html>
