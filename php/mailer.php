<?
        if(isset($_POST['submit'])) {
                $name = $_POST['name'];
                $mailFrom = $_POST['email'];
                $subject = $_POST['subject'];
                

                $mailTo = "damian@dmwasielewski.dev";
                $message = "Name: $name" . "\r\n". $message = $_POST['message'];
                $headers = "From: $mailFrom" . "\r\n" . "Reply-To: $mailFrom";

                mail($mailTo, $subject, $message, $headers);
                header('location:../index.php?success#contact');
                           
                             

        } 
        else 
        {
                header('location:../index.php');
        }



?>