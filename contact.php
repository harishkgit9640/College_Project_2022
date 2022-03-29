<?php
require_once "Faclities/config.php";
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $sql = "INSERT INTO contact_info (name,email,phone,subject,message)
    VALUES ('$name', '$email', '$phone', '$subject', '$message')";

    if ($link->query($sql) === TRUE) {
        header("location: contact.php");
        echo "sumitted successfully !";
    } else {
        echo "Error: " . $sql . "<br>" . $link->error;
    }

    $link->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Contact Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <?php include "menu.php"; ?>
</head>

<body>

    <div class="container contact_us my-5">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="contact-form">
                    <h1 class="text-primary text-center">Contact Us</h1>
                    <p class="hint-text text-center mb-5">We'd love to hear from you, please drop us a line if you've
                        any query or question.</p>
                    <form action="" method="post">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="inputName">Name</label>
                                    <input type="text" name="name" class="form-control" id="inputName" required>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="inputEmail">Email</label>
                                    <input type="email" name="email" class="form-control" id="inputEmail" required>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="inputPhone">Phone</label>
                                    <input type="text" name="phone" class="form-control" id="inputPhone" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputSubject">Subject</label>
                            <input type="text" name="subject" class="form-control" id="inputSubject" required>
                        </div>
                        <div class="form-group">
                            <label for="inputMessage">Message</label>
                            <textarea name="message" class="form-control" id="inputMessage" rows="5"
                                required></textarea>
                        </div>
                        <button type="submit" name="submit" class="btn btn-success px-5 "></i> Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php include "footer.php"; ?>
</body>

</html>