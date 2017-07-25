<html>
    <head>
        <title>Welcome</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            .reg1{
                width:30%;
                height:320px;
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
            .field
            {
                width:550px;
                height:75px;
                float:left;
                margin-top: 10px;

            }
            .namefield{
                width:150px;
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
            }

            .textfield  {
                width:330px;
                height:50px;
                margin-top: 15px;
                margin-left:0px;
                float:left;
            } 
            input,select,textarea{
                margin-top:7px;
                width:300px;
                height:30px;
            }

            button           {  
                background-color:#000000;
                margin-top:10px;
                color: #FFFFFF;
                width:20%;
                height:50px;	
                border-radius:50px;
                margin-left:225px;
                font-family: 'Open Sans Condensed', sans-serif;
                font-size: 18px;
                text-transform: uppercase;
            }
            
        </style>
    </head>
    <body>
        <div class="reg1">
            <h1>welcome to login page</h1>
            <form method="POST" action="userauth.php">
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
                
                    <button id ='submit' name='submit'>login</button>
                </div>
    </body>
</html>
