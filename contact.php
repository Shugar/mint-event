<?php





$post = (!empty($_POST)) ? true : false;
if($post)
{
$email = trim("domofon");
$name = htmlspecialchars($_POST["name"]);
$email = htmlspecialchars("nobody@robot.ru");
$tel = htmlspecialchars($_POST["phone"]);
$error = "";
if(!$name)
{
$error .= "Пожалуйста введите ваше имя.\n";
}
// Check email
function ValidateEmail($value)
{
$regex = "/^([a-zA-Z0-9])+([\.a-zA-Z0-9_-])*@([a-zA-Z0-9_-])+(\.[a-zA-Z0-9_-]+)*\.([a-zA-Z]{2,6})$/";
if($value == "") {
return false;
} else {
$string = preg_replace($regex, "", $value);
}
return empty($string) ? true : false;
}
if(!$email)
{
$error .= "Пожалуйста введите e-mail.\n";
}
if($email && !ValidateEmail($email))
{
$error .= "Введите корректный e-mail.\n";
}
// Check tel

if(!$tel)
{
$error .= "Пожалуйста введите телефон.\n";
}
//5055551@mail.ru
if(!$error)
{
$subject ="Заявка на свадьбу";
$message ="Новый запрос!\n\nИмя: ".$name."\n\nТелефон:".$tel."\n\n";
$mail = mail("5055551on@gmail.com ", "Заявка на свадьбу", $message, "From: 5055551on@gmail.com  Reply-To: 5055551on@gmail.com ");





if($mail)
{
echo 'OK';
}
}
else
{
	echo ''.$error.'';
}
}
?>