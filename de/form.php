    <?php

    $name = $_POST['name'];
    $email_address = $_POST['email'];
    $messageorg = $_POST['message'];
    $subject = $_POST['subject'];





        $to      = 'pawel@lobocode.com';
    $subject = "Inigra - contact form submission";
    $message = "You have received a new message. ".
    " Here are the details:\n Name: $name \n ".
    "Email: $email_address\n Subject \n $subject\n Message \n $messageorg";
    $headers = 'From: pawel@lobocode.com'       . "\r\n" .
                 'Reply-To: pawel@lobocode.com' . "\r\n" .
                 'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);
    ?>