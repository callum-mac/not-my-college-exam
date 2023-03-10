<?php
require "check_session.php";
?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" href="styles.css" />
<body>
<div class = "topbar">
    <a href = "index.php"><img class = logoleft src = "logo.png"></a> 
    <a href = "index.php" class = hometag><button class=homebutton>Home</button></a>
    <a href = "FAQs.php" class = hometag><button class=homebutton>FAQs</button></a>
    <a href = "forecast.php" class = hometag><button class=homebutton>Forecast</button></a>
    <a href = "MyHealthPostLogin.php" class = hometag><button class=homebutton>MyHealth</button></a>
    <a href = "Settings.php" class = hometag><button class=homebutton>Settings</button></a>
</div>
<h1 class=mainheader>MyHealth</h1>
<div class=myhealthbox>
    <h2 class = secondaryheader>Welcome back, <?php echo $_SESSION["user"]["Name"]?>!</h2>
    <h2 class = label2>Welcome to your MyHealth Dashboard!</h2>
    <div class=myhealthflexbox>
        <div class = box>
            <h2 class = headinglabel>What happened?</h2>
            <div class=healtheventdetailbox>
                <input type="text" class="healtheventdetailbox" name = "details" placeholder="What Happened?">
            </div>
        </div>
        <div class = box>
        <button class=button2>Submit</button>
        <a href = 'MyHealthPostLogin.php'><button class=button2>Go Back</button></a>

        </div>
    </div>
</div>


</div>





</body>
</html>