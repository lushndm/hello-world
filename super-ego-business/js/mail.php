<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['name'])) {$name = $_POST['name'];}
    if (isset($_POST['email'])) {$email = $_POST['email'];}
	if (isset($_POST['tel'])) {$tel = $_POST['tel'];}
    if (isset($_POST['formData'])) {$formData = $_POST['formData'];}
 
    $to = "info@super-ego.info";
    $sendfrom   = "Super Ego <info@super-ego.info>";
    $headers  = "From: " . $sendfrom . "\r\n";
    $headers .= "Reply-To: ". $sendfrom . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html;charset=utf-8 \r\n";
    $subject = "Заявка с сайта";
    $message = "$formData<br>
				<b>Письмо с сайта</b> <br> 
				<b>Имя:</b> $name <br>
				<b>E-mail:</b> $email <br>
				<b>Телефон:</b> $tel";

    $send = mail ($to, $subject, $message, $headers);
    if ($send == 'true')
    {
    echo 'ok';
    }
    else 
    {
    echo '<center><p class="fail"><b>Ошибка. Сообщение не отправлено!</b></p></center>';
    }
} else {
    http_response_code(403);
    echo "Попробуйте еще раз";
}
?>