<?php
  require_once "Faclities/config.php";
if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $sql = "INSERT INTO contact_info (name,email,phone,subject,message)
    VALUES ('$name', '$email', '$phone', '$subject', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "Submitted successfully";
    } 
    else{
  echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

}
?>