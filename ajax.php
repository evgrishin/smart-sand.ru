<?php
// check if fields passed are empty

$subdomain = current(explode('.', trim($_SERVER['HTTP_HOST']), 2));
$host = gethostname();

if(empty($_POST['name']))
	die("");

$name = $_POST['name'];
$phone = $_POST['phone'].$_POST['phone2'];
$id = $_POST['id'];
$color = $_POST['color'];

// create email body and send it 
$to1 = 'info@matras-house.ru'; // put your email
$to2 = 'e.v.grishin@yandex.ru'; // put your email
$email_subject = "NEW ORDER: $name - $phone ";
$email_body = "Form \". \n\n".
"Name: $name \n".
"Phone: $phone \n".
"product: $id \n".
"color: $color";
$headers = "From: e.v.grishin@yandex.ru\n";
$headers .= "Reply-To:"; 

mail($to1,$email_subject,$email_body,$headers);
mail($to2,$email_subject,$email_body,$headers);

$s = true;
if (trim($subdomain) == "test")
	$s = false;
if (trim($host)=="mh01")
	$s = false;

if ($s==true)
{
	$sms = "http://lk.open-sms.ru/multi.php?login=matras_house1&password=sms23Atdhfkz&message=new order: $name - $phone - product:$id &phones=79601652555&originator=DomMatrasov";
	$result = file_get_contents($sms);
}

echo "Ваш заказ успешно отправлен!";


?>