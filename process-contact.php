<?php
$form_data = (!empty($_POST)) ? $_POST: null;
$form_is_complete = (empty($_POST)) ? false : null;

if ($form_data){
    // Trim each input value
    foreach($form_data as $value){
        $value = trim($value);
    }

    $form_data['message'] = htmlentities($form_data['message']);

    // Create email from values
    $name = $form_data['name'];
    $email = filter_var($form_data['email'], FILTER_SANITIZE_EMAIL); // Sanitize email
    $message = filter_var($form_data['message'], FILTER_SANITIZE_MAGIC_QUOTES);
    $to = "Matt Miss<miss.matthew@student.greenriver.edu>";
    $subject = "New Message At www.mattmiss.greenriver.edu";
    $from = $form_data['name'] . '<' . $form_data['email'] . '>';
    $headers = 'From: ' . $from . "\r\n" .
        'Reply-To: ' . $from . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    // Try to send email. Tell user message was sent if mail() returns true
    if (mail($to, $subject, $message, $headers)){
        header('Location: thankyou.html');
    }else{
        echo "<h3>There was an error in your form.</h3>";
    }
}

?>
