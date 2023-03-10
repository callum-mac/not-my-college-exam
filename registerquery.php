<?php

	//starting the session
	session_start();
 
	//including the database connection
	require_once 'conn.php';
 

    // Setting variables
    $username = $_POST['username'];
    $password = $_POST['password'];
    $dob = $_POST['dob'];
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $location = $_POST['location'];
    $allergies = $_POST['allergies'];


    if ($username == ''){
        $_SESSION['error'] = "Invalid Entry, Please Try Again!";
        header('location:registerpage.php');
        exit();
    }
    else if ($password == ''){
        $_SESSION['error'] = "Invalid Entry, Please Try Again!";
        header('location:registerpage.php');
        exit();
    }
    else if ($dob == ''){
        $_SESSION['error'] = "Invalid Entry, Please Try Again!";
        header('location:registerpage.php');
        exit();
    }
    else if ($fullname == ''){
        $_SESSION['error'] = "Invalid Entry, Please Try Again!";
        header('location:registerpage.php');
        exit();
    }
    else if ($email == ''){
        $_SESSION['error'] = "Invalid Entry, Please Try Again!";
        header('location:registerpage.php');
        exit();
    }
    else if (!strpos($email,'@')){
        $_SESSION['error'] = "Invalid Entry, Please Try Again!";
        header('location:registerpage.php');
        exit();
    }
    else if (!strpos($email,'.com')){
        $_SESSION['error'] = "Invalid Entry, Please Try Again!";
        header('location:registerpage.php');
        exit();
    }
    else if ($location == ''){
        $_SESSION['error'] = "Invalid Entry, Please Try Again!";
        header('location:registerpage.php');
        exit();
    }
    else if ($allergies == ''){
        $_SESSION['error'] = "Invalid Entry, Please Try Again!";
        header('location:registerpage.php');
        exit();
    }


    //Hashing password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);


    $query = "SELECT * FROM `Users` WHERE `Username` = :username AND 'Email' == :email";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':username', $username); 
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $row = $stmt->fetch();
    if ($username==($row['Username'])){
        $_SESSION['error'] = "Username already taken! Please Try Again!";
        header('location:registerpage.php');
        exit();
    } else if ($email==($row['Email'])){
            $_SESSION['error'] = "An Account is already linked with that Email! Please Try Again!";
        header('location:registerpage.php');
        exit();
    } else {
        // Insertion Query
        $query = "INSERT INTO `Users` (Name, Email, DOB, Username, Password, Location, Allergies) VALUES(:fullname, :email, :dob, :username, :password, :location, :allergies)";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':fullname', $fullname);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':dob', $dob);
        $stmt->bindParam(':username', $username); 
        $stmt->bindParam(':password', $password);
        $stmt->bindParam(':location', $location);
        $stmt->bindParam(':allergies', $allergies);


        
        // Check if the execution of query is success
        if($stmt->execute()){
            //setting a 'success' session to save our insertion success message.
            $_SESSION['success'] = "Account Created!";

            //redirecting to the index.php 
            header('location: registerpage.php');
        }
    }




?>