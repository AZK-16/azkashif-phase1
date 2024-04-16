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
    $sql = "SELECT email, password, firstName FROM ACCOUNTS";
    $user_info = $conn->query($sql);
    // $row_data = $user_info->fetch_assoc();

        while ($row_data = $user_info->fetch_assoc()) {
            if ($_POST["email"] === $row_data['email'] 
            && $_POST["password"] === $row_data['password']) {

                session_start();

                $email = $_SESSION['email'];
                $password = $_SESSION['password'];

                echo '<script src="../js/addEntry.js"></script>';
                header("Location: ../azkashif-phase2/addEntry.php");

                // if (isset($email) && $password) {
                //     echo '<script src="../azkashif-phase2/addEntry.js" defer></script>';
                // }

            } else {
            echo "Please enter a valid email and password." . "<br>" . $conn->error;
            }
        }        
    $conn->close();
    }

