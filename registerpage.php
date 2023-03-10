<!DOCTYPE html>
<html>
<link rel="stylesheet" href="styles.css" />
<body>
<?php
//starting the session
	session_start();
?>

<a href = "index.php"><img class = logoleft src = "logo.png"></a>

</div>
<div class = center>
    <div class = registerbox>
    <form method = "POST" action = "registerquery.php">
        <h2 class = secondaryheader>Register Here!</h2>
        <h2 class = label2>Fill out the information below!</h2>
        <div class = alignleft>
            <label class = label1>Full Name:</label>
        </div>
        <input type="text" class="textbox" name = "fullname" placeholder="Full Name">
        <div class = alignleft>
            <label class = label1>Email:</label>
        </div>
        <input type="text" class="textbox" name = "email" placeholder="Email">
        <div class = alignleft>
            <label class = label1>Date Of Birth:</label>
        </div>
        <input type="date" min='1923-03-08' max='2023-01-01' class="textbox" name = "dob" placeholder="Date Of Birth">
        <div class = alignleft>
            <label class = label1>Location:</label>
        </div>
        <select type="text" class="textbox" name = "location" placeholder="Location">
            <option value="Milton Keynes">Milton Keynes</option>
            <option value="London">London</option>
            <option value="Luton">Luton</option>
            <option value="Scotland">Scotland</option>
            <option value="Wales">Wales</option>
            <option value="Skegness">Skegness</option>
        </select>
        <div class = alignleft>
            <label class = label1>Allergies:</label>
        </div>
        <select type="text" class="textbox" name = "allergies" placeholder="Allergies">
            <option value="None">None</option>
            <option value="Hayfever">Hayfever</option>
            <option value="Asthma">Asthma</option>
            <option value="Hayfever & Asthma">Both</option>
        </select>
        <div class = alignleft>
            <label class = label1>Username:</label>
        </div>
            <input type="text" class="textbox" name = "username" placeholder="Username">
        <div class = alignleft>
            <label class = label1>Password:</label>
        </div>
        <input type="password" class="textbox" name = "password" placeholder="Password"><br><br>
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
                <?php
            //checking if the session 'error' is set. Erro session is the message if the 'Username' and 'Password' is not valid.
            if(ISSET($_SESSION['success'])){
        ?>
        <!-- Display Login Error message -->
            <div class="success"><?php echo $_SESSION['success']?></div>
        <?php
            //Unsetting the 'error' session after displaying the message. 
            unset($_SESSION['success']);
            }
        ?>
        <button class = button type = "submit">Create Account</button>
        <div class = alignleft>
            <label class = label2>Already have an account? <a class = atag href="loginpage.php">Login</a></label>
        </div>
    </form>
    </div>
</div>

</body>
</html>
