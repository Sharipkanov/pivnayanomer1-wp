<?php

if(isset($_POST['fullname'])) {

    $fullname = "ФИО:\r\n" . $_POST['fullname'] . "\r\n\r\n";
    $phone = "Телефон:\r\n" . $_POST['phone'] . "\r\n\r\n";
    $age = "Возраст:\r\n" . $_POST['age'] . "\r\n\r\n";
    $text = "Сообщение:\r\n" . $_POST['messange'];

    $from_email = 'sharipkanov@gmail.com'; //sender email
    $recipient_email = 'sharipkanov@gmail.com'; //recipient email
    $subject = 'Отклик на вакансию с сайта'; //subject of email
    $message = ''; //message body

    $message .= $fullname . $phone . $age . $text;

//get file details we need
    $file_tmp_name    = $_FILES['resume']['tmp_name'];
    $file_name        = $_FILES['resume']['name'];
    $file_size        = $_FILES['resume']['size'];
    $file_type        = $_FILES['resume']['type'];
    $file_error       = $_FILES['resume']['error'];

    $boundary = md5("sanwebe");


//header
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "From:".$from_email."\r\n";
    $headers .= "Content-Type: multipart/mixed; boundary = $boundary\r\n\r\n";

//plain text
    $body = "--$boundary\r\n";
    $body .= "Content-Type: text/plain; charset=utf-8\r\n";
    $body .= "Content-Transfer-Encoding: base64\r\n\r\n";
    $body .= chunk_split(base64_encode($message));

    if(!$file_error>0)
    {
        if(in_array($file_type, array('image/jpeg', 'image/png', 'application/pdf', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'application/msword', 'application/x-mswrite', 'text/plain'))) {
            $user_email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
        }
        //read from the uploaded file & base64_encode content for the mail
        $handle = fopen($file_tmp_name, "r");
        $content = fread($handle, $file_size);
        fclose($handle);
        $encoded_content = chunk_split(base64_encode($content));

        //attachment
        $body .= "--$boundary\r\n";
        $body .="Content-Type: $file_type; name=".$file_name."\r\n";
        $body .="Content-Disposition: attachment; filename=".$file_name."\r\n";
        $body .="Content-Transfer-Encoding: base64\r\n";
        $body .="X-Attachment-Id: ".rand(1000,99999)."\r\n\r\n";
        $body .= $encoded_content;
    }
    $sentMail = @mail($recipient_email, $subject, $body, $headers);

    if($sentMail) {
        wp_safe_redirect('/vacancies');
    }else{
        die('Could not send mail! Please check your PHP mail configuration.');
    }
}