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

if (isset($_POST['sermonbtn'])) {
    $title = $_POST['title'];
    $date = $_POST['date'];
    $teaching = $_POST['description'];
    $speaker = $_POST['speaker'];

        $query = "INSERT INTO sermons (title, date,description, speaker) VALUES ('$title', '$date', '$teaching','$speaker')";
        $query_run = mysqli_query($conn, $query);

        if ($query_run) {
            $_SESSION['success'] = "sermon added successfully";
            header('location: sermons.php');
        } else {
            $_SESSION['status'] = "sermons not added: " . mysqli_error($conn);
            header('location: sermons.php');
        }
    } 

    
    

?>
