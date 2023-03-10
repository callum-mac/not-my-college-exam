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
    <div class=flexbox>
        <div class = box>
            <h2 class = headinglabel>About Me</h2>
            <?php
            $dob = new DateTime($_SESSION["user"]["DOB"]);
            $today = new DateTime();
            $usersage = $today->diff($dob);

            ?>
            <h3 class = label3> Age: <?php echo $usersage->y ?> </h3>
            <h3 class = label3> Location: <?php echo $_SESSION["user"]["Location"]?></h3>
            <h3 class = label3> Allergies: <?php echo $_SESSION["user"]["Allergies"]?></h3>
            <h2 class = headinglabel>Todays Advice</h2>
            <h3 class = label4> The pollen count is high today! Take extra care when going outside. But make sure to enjoy the sunshine!</h3>
        </div>
        <div class = box>
            <div class = healtheventbox>
            <h2 class = headinglabel>Recent Health Events</h2>
            </div>
        </div>
        <div class = box>
        <a href="signout.php"><button class=button2>Sign Out</button></a>
        <a href="MyHealthLogEvent.php"><button class=button2>Log Events</button></a>
        <h2 class = headinglabel>Current Weather</h2>
        </div>
    </div>
</div>


</div>





</body>
</html>