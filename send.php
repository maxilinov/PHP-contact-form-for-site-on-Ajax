<?php
if(!empty($_POST['telephone'] ))
{
$to = "адрес почты на которую будет приходить заявка";
$from = 'адрес почты асcоциированный с сайтом';
$subject = "Заявка на звонок менеджера";
$message = 'Имя: '.$_POST['name'].'; Телефон: '.$_POST['telephone'].';';
$headers = "Content-type: text/html; charset=UTF-8 \r\n";
$headers .= "From: <адрес почты асcоциированный с сайтом>\r\n";
$result = mail($to, $subject, $message, $headers);

    if ($result){ 
        echo "<p>Заявка отправлена. Мы свяжется с вами в течении 15 минут.</p>";
    }
    else{
        echo "<p>Заявка не отправлена. Пожалуйста, повторите.</p>";
    }
}
else {
echo "<p>Обязательные поля не заполнены. Введите номер телефона</p>";
}
?>
