<?php
 //lets get all form values
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $website = $_POST["website"];
    $message = $_POST["message"];

    echo $name;

    if(!empty($email) && !empty($message)){ //if email and message is not empty
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){// if email input a valid email
            $receiver = "onlineclasses00000@gmail.com"; //email reciever email address
            $subject = "From: $name <$email>"; //subject of the email
            //margint and concatening all user values inside body variable, \n is for newline
            $body = "Name: $name\nEmail: $email \nPhone: $phone \nWebsite: $website \nMessage: $message\n\nRegards, \n$name";
            $sender = "From: $email"; //sender email
            if(mail($receiver, $subject, $body, $sender)){//mail() is an inbuilt php function to send mail
                echo " your message has been sent";
            }
            else{
                echo "Sorry, failde to send your message";
            }
        }else{
            echo "Enter e valid email address!";
        }
    }
    else{
        echo "email and passsword field is required";
    }
?>