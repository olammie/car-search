<?php
    include_once 'header.php';
?>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <div class="container">
    
        <div class="header">
            <h2>Log in</h2>


        </div>
        <form action="includes/login.inc.php" method="POST">


                <div>

                    <label for="username">Username</label>
                    <input type="text" name="uid" required>
                
                </div>

                <div>

                    <label for="password">Password</label>
                    <input type="password" name="pwd" required>

                </div>

                <button type="submit" name="submit">Log in</button>

                <p>Not a user?<a href="signup.php">Register here</a></p>
        
        </form>
    </div>
</body>

<?php
    include_once 'footer.php';
?>