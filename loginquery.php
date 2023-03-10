<?php
	//starting the session
	session_start();
	//including the database connection
	require_once 'conn.php';
 

    // Setting variables
    $username = $_POST['username'];
    $password = $_POST['password'];


    // Select Query for counting the row that has the same value of the given username and password. This query is for checking if the access is valid or not.
    $query = "SELECT * FROM `Users` WHERE `Username` = :username AND `Password` = :password";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $password);
    $stmt->execute();
    $row = $stmt->fetch();

    $count = count($row ? $row : []);
    if ($count > 0) {
        $_SESSION["user"] = $row;
        header('location:MyHealthPostLogin.php');
    }else{
        $_SESSION['error'] = "Invalid username or password";
        header('location:loginpage.php');
    }

?>