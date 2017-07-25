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
