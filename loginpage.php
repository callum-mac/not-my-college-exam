<!DOCTYPE html>
<html>
<?php 
//starting the session
session_start();
?>
<link rel="stylesheet" href="styles.css" />
<body>
<a href = "index.php"><img class = logoleft src = "logo.png"></a>    
</div>
<div class = center>
    <div class = loginbox>
        <form method = "POST" action = "loginquery.php">
            <h2 class = secondaryheader>Welcome back!</h2>
            <h2 class = label2>We're so excited to see you again!</h2>
            <div class = alignleft>
                <label class = label1>Username:</label>
            </div>
                <input type="text" class="textbox" name = "username" placeholder="Username">
            <div class = alignleft>
                <label class = label1>Password:</label>
            </div>
            <input type="password" class="textbox" name = "password" placeholder="Password"><br><br>
            <button class = button type = "submit">Login</button>
            <?php
                //checking if the session 'error' is set. Erro session is the message if the 'Username' and 'Password' is not valid.
                if(ISSET($_SESSION['error'])){
            ?>
            <!-- Display Login Error message -->
                <div class="error"><?php echo $_SESSION['error']?></div>
            <?php
                //Unsetting the 'error' session after displaying the message. 
                unset($_SESSION['error']);
                }
            ?>
            <div class = alignleft>
                <label class = label2>Need an account? <a class = atag href="registerpage.php">Register</a></label>
            </div>
        </form>
    </div>
</div>

</body>
</html>
