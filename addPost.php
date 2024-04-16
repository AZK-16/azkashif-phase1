<?php
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "ecs417";

    // Creates connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Checks connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    //         date_default_timezone_set('Europe/London');
    
    //         $blogdate = date("d/m/y");
    //         $blogtime = date("H:i");
    //         $blogtitle = $_POST["title"];
    //         $blogtext = $_POST["blogpost"];
    
            $sql = "INSERT INTO BLOGS (blogDate, blogTime, blogTitle, blogText)
            VALUES (?, ?, ?, ?)";
    
    //         if ($conn->query($sql)) {

    //             $stmt = $conn->prepare($sql);
    //             $stmt->bind_param(":blogdate", $blogdate);
    //             $stmt->bind_param(":blogtime", $blogtime);
    //             $stmt->bind_param(":blogtitle", $blogtitle);
    //             $stmt->bind_param(":blogtext", $blogtext);

    //             $stmt->execute();

    //             header("Location: ../azkashif-phase2/blog.php");

    //             // 1st blog test
    //             // this is my first blog

    // } else {
    //     echo "Error: " . $sql . "<br>" . $conn->error;
    // }

    $stmt = $conn->prepare($sql); 

    $stmt->bind_param("ssss", $blogdate,  $blogtime, $blogtitle, $blogtext);

    date_default_timezone_set('Europe/London');
    
    $blogdate = date("d/m/y");
    $blogtime = date("H:i");
    $blogtitle = $_POST["title"];
    $blogtext = $_POST["blogpost"];

    $stmt->execute();

    header("Location: ../azkashif-phase2/blog.php");

    $stmt->close();
    $conn->close();
}