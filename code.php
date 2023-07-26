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

if (isset($_POST['registerbtn'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['password_confirm'];

    if ($password === $confirm_password) {
        $query = "INSERT INTO registration (username, email, password) VALUES ('$username', '$email', '$password')";
        $query_run = mysqli_query($conn, $query);

        if ($query_run) {
            $_SESSION['success'] = "admin profile added";
            header('location: register.php');
        } else {
            $_SESSION['status'] = "admin profile not added: " . mysqli_error($conn);
            header('location: register.php');
        }
    } else {
        $_SESSION['status'] = "password and confirm password don't match";
        header('location: register.php');
    }
}

if (isset($_POST['updatebtn'])) {
    $id = $_POST['edit_id'];
    $username = $_POST['edit_username'];
    $email = $_POST['edit_email'];
    $password = $_POST['edit_password'];

    $query = "UPDATE registration SET username='$username', email='$email', password='$password' WHERE id='$id'";
    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
        $_SESSION['success'] = "update successful";
        header('location: register.php');
    } else {
        $_SESSION['status'] = "update failed!!!";
        header('location: register.php');
    }
}
//deletes data from profile
if (isset($_POST['deletebtn'])) {
    $id = $_POST['delete_id'];

    $query = "DELETE FROM registration WHERE id='$id'";
    $query_run = mysqli_query($conn, $query);
    if ($query_run) {
        $_SESSION['success'] = "Your data is deleted";
        header('location: register.php');
    } else {
        $_SESSION['status'] = "delete was unsuccessful";
        header('location: register.php');
    }
}

//adds session


if (isset($_POST['loginbtn'])) {
    $o_email = $_POST['o_email'];
    $o_password = $_POST['o_password'];

    $query = "SELECT * FROM registration WHERE email='$o_email' AND password='$o_password'";
    $query_run = mysqli_query($conn, $query);

    if (mysqli_fetch_array($query_run)) {
        $_SESSION['username'] = $o_email;
        header('location: index.php');
    }
     else {
        $_SESSION['status'] = "email/password is wrong";
        header('location: login.php');
    }
}
// adds data to abouts
if (isset($_POST['aboutbtn'])) {
    $title = $_POST['atitle'];
    $subtitle = $_POST['astitle'];
    $description = $_POST['description'];
  

        $query = "INSERT INTO about (title, subtitle,description) VALUES ('$title', '$subtitle', '$description')";
        $query_run = mysqli_query($conn, $query);

        if ($query_run) {
            $_SESSION['success'] = " successfully added";
            header('location: about us.php');
        } else {
            $_SESSION['status'] = "not added: " . mysqli_error($conn);
            header('location: about us.php');
        }
    } 
//edits the about page
    if (isset($_POST['ebtn'])) {
        $id = $_POST['edit_id'];
        $title = $_POST['edit_title'];
        $subtitle = $_POST['edit_sub'];
        $description = $_POST['edit_desc'];
    
        $query = "UPDATE about SET title='$title', subtitle='$subtitle', description='$description' WHERE id='$id'";
        $query_run = mysqli_query($conn, $query);
    
        if ($query_run) {
            $_SESSION['success'] = "update successful";
            header('location: about us.php');
        } else {
            $_SESSION['status'] = "update failed!!!";
            header('location: about us.php');
        }
    }
//deletes from about
    if (isset($_POST['delbtn'])) {
        $id = $_POST['delete_id'];
    
        $query = "DELETE FROM about WHERE id='$id'";
        $query_run = mysqli_query($conn, $query);
        if ($query_run) {
            $_SESSION['success'] = "Your data is deleted";
            header('location: about us.php');
        } else {
            $_SESSION['status'] = "delete was unsuccessful";
            header('location: about us.php');
        }
    }
    //contacts upload
    if (isset($_POST['contactbtn'])) {
                    $contact = $_POST['contact'];
                $socialmedia = $_POST['smedia'];
                $image =$_FILES["contact_image"]["name"];
            if(file_exists("upload/" .$_FILES["contact_image"]["name"])){
$store =  $_FILES["contact_image"]["name"];
$_SESSION['status'] = "Image already exists. '.$store.'";
header('location:contacts.php');


    }
    else{
            $query = "INSERT INTO contact (contact,socialmedia,image) VALUES ('$contact', '$socialmedia', '$image')";
            $query_run = mysqli_query($conn, $query);

            if ($query_run) {
                move_uploaded_file($_FILES["contact_image"]["tmp_name"], "upload/" .$_FILES["contact_image"]["name"]);
                $_SESSION['success'] = " successfully added";
                header('location: contacts.php');
            } else {
                $_SESSION['status'] = "not added: " . mysqli_error($conn);
                header('location: contacts.php');
            }
    }
}
?>
