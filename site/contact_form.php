<?php 

    if (isset($_POST['send'])) {
        $name = $_POST['name'];
        $emailForm = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        $mailTo = "mahmoudmohamed159741@gmail.com";
        $headers = "From: " .$emailForm;
        $txt = "You have recieved an email from" .$name. "\n\n" .$message;
        
        mail($mailTo, $subject, $txt, $headers);
        header("Location: index.php?mailsend");
    }

?>