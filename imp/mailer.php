<?php

include '../mymail/settings.php';
if(isset($_POST['prabin'])){
    $email=$_POST['email'];
    
    $message=$_POST['msg'];

    $mail->addReplyTo('ghanu61837@gmail.com', 'Blood System Admin');
    $mail->addAddress($email, 'User');
    $mail->Subject = 'Blood Request';

    //$message="Hello, this is our first email";
             
    // $message is gotten from the form
    $mail->msgHTML($message);
   // $mail->AltBody = $filteredmessage;
    if (!$mail->send()) 
    {
        $mailmsg = "We are extremely sorry to inform you that your message
             could not be delivered,please try again.";
    } 
    else 
        {
        $mailmsg =  "Your message was successfully delivered,you would be contacted shortly.";
        }

        echo $mailmsg;



        }
        ?>