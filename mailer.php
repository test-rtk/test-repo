<?php
    session_start();
    
/*    //Get the form fields, html tags and whitespace.
    $name = strip_tags(trim($_POST["name"]));
    $name = str_replace(array("\r","\n"),array(" "," "),$name);
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $message = trim($_POST["message"]);

    //check the data
    if (empty($name) OR empty($message) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: index.php?success=-1#form");
        exit;
    }

    // Set the recipient email address. Update this to your desired email adress.
    $recipient = "mislav10@gmail.com";
    
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
    header("Location: index.php?success=1#form");
        */

    

    session_start();

    require_once 'libs/PHPMailer/PHPMailerAutoload.php';

    $errors = [];
    
    if (empty($name) OR empty($message) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: index.php?success=-1#form");
        exit;
    }
    
    if(isset($_POST['name'], $_POST['email'], $_POST['message'])){
        
        $fields = [
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'message' => $_POST['message']
        ];
        
        foreach($fields as $field => $data){
            if(empty($data)){
                $errors[] = 'The ' . $field . ' field is required.';
            }
        }
        
        if(empty($errors)){
            
            $m = new PHPMailer;
            
            $m->isSMTP();
            $m->SMTPAuth = true;
            
            //$m->SMTPDebug = 1;
            
            $m->Host = 'smtp.gmail.com';
            $m->Username = 'mrcinkossend@gmail.com';
            $m->Password = 'toster123';
            $m->SMTPSecure = 'ssl';
            $m->Port = 465;
            
            $m->isHTML();
            
            $m->Subject = 'Contact form submitted';
            $m->Body = 'From: ' . $fields['name'] . ' (' . $fields['email'] . ')<p>' . $fields['message'] . '</p>';
            
            $m->FromName = 'Contact';
            
            $m->AddAddress('mislav1337@gmail.com', 'Mido Domi');
            
            if($m->send()){
                header("Location: index.php?success=1#form");
            } else {
                header("Location: index.php?success=-1#form");
            }
            
        }
        
    } else {
        $errors[] = 'Something went wrong.';
    }

    $_SESSION['errors'] = $errors;
    $_SESSION['fields'] = $fields;
    
    header("Location: index.php?success=1#form");
?>
