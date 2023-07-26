<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "otp";

$conn = mysqli_connect("localhost", "root", "", "otp");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['eventbtn'])) {
    $name = $_POST['ename'];
    $date = $_POST['edate'];
    $time = $_POST['etime'];
    $desc = $_POST['edescription'];
    $image =$_FILES["event_image"]["name"];
            if(file_exists("upload/" .$_FILES["event_image"]["name"])){
$store =  $_FILES["event_image"]["name"];
$_SESSION['status'] = "Image already exists. '.$store.'";
header('location:events.php');
            }
            else{

                $query = "INSERT INTO events (event_name, event_date, event_time, event_description, event_image) VALUES ('$name', '$date', '$time', '$desc', '$image')";

        $query_run = mysqli_query($conn, $query);

        if ($query_run) {
            $_SESSION['success'] = "event added successfully";
            header('location: events.php');
        } else {
            $_SESSION['status'] = "event not added: " . mysqli_error($conn);
            header('location: events.php');
        }
    } 
}


?>
