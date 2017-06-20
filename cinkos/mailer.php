<?php

    //Get the form fields, html tags and whitespace.
    $name = strip_tags(trim($_POST["name"]));
    $name = str_replace(array("\r","\n"),array(" "," "),$name);
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $message = trim($_POST["message"]);

    //check the data
    if (empty($name) OR empty($message) OR !filter_var($email, FILTER_VALIDATE_EMAIL)){
        header("Location: http://wwww.mdominovic.github.io/cinkos/index.php?success=-1#form");
        exit;
    }

    // Set the recipient email address. Update this to your desired email adress.
    $recipient = "mislav1337@gmail.com";
    
    // Set email subject
    $subject = "New contact from $name";

    // Build the email content.
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Message: \n$message\n";

    // Build the email headers. 
    $email_headers = "From: $name <$email>";

    // Send the email.
    mail($recipient, $subject, $email_content, $email_headers);
        
    // Redirect to the index.html page with succes code
    header("Location: http://wwww.mdominovic.github.io/cinkos/index.php?success=1#form");
        
?>
    