<?php
    session_start();

    require_once 'libs/PHPMailer/PHPMailerAutoload.php';

    $errors = [];
    
    /*if (empty($name) OR empty($message) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: index.php?success=0#form");
        exit;
    }*/
    
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
            
            $m->SMTPDebug = 1;
            
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
                header("Location: index.php?success=0#form");
            }
            
        }
        
    } else {
        $errors[] = 'Something went wrong.';
    }

    $_SESSION['errors'] = $errors;
    $_SESSION['fields'] = $fields;
?>
