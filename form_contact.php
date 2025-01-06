<?php 
    $to = "pawel.reszka@karpul.pl"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
	$org_subject = $_POST['subject'];
	
	
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $name . " wrote the following:" . "\n\n" . $_POST['message'] . "\n\n" . " this was the subject:" . "\n\n" . $org_subject;

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
 
?>