<html>
    <head>

    </head>
    <html>
    <form action="" method="post">
    <input type="submit" value="Send details to embassy" />
    <input type="hidden" name="button_pressed" value="1" />
</form>

<?php

if(isset($_POST['button_pressed']))
{
    $to      = 'venkaiahkolleti123@gmail.com';
    $subject = 'the subject';
    $message = 'hello';
    $headers = 'From: venkaiahkvk146@gmail.com' . "\r\n" .
        'Reply-To: venkaiahkolleti123@gmail.com.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);

    echo 'Email Sent.';
}

?>
    </html>
</html>