<?php

    // connecting the database
    $conn = new PDO('sqlite:task2.db');
    //Setting connection attributes
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //Query for creating reating the member table in the database if not exist yet.


?>