<?php
//данные для отправки почты

$isvalid=false;
$patternPhone='/^(\+7|7|8)?[\s\-]?\(?[489][0-9]{2}\)?[\s\-]?[0-9]{3}[\s\-]?[0-9]{2}[\s\-]?[0-9]{2}$/';//для номера телефона
$patternName = '/^[А-Я][а-я]*$/';//для проверки корректности имени

if($_SERVER['REQUEST_METHOD']=='POST')
{
	$userName=$_POST['form_input-name'];
	$userSecondName=$_POST['form_input-second-name'];
	$userLastName=$_POST['form_input-last-name'];
	//проверка e-mail;
	if(stripos($_POST['form_input-Email'],'@gmail.com')==false)
	{
		$messageEmail="Не корректный email!";
	}
	//empty($_POST['form_input-name'])||
	if(!preg_match($patternName, $userName))
	{
		//echo "Текст не заполнен";
		//$messageName="<p >ЗАПОЛНИ ТЕКСТ </p>";
		$messageName='не корректный или пустой текст';
	}
	if(!preg_match($patternName, $userSecondName))
	{
		//echo "Текст не заполнен";
		//$messageName="<p >ЗАПОЛНИ ТЕКСТ </p>";
		$messageSecondName='не корректный или пустой текст';
	}
	if(!preg_match($patternName, $userLastName))
	{
		//echo "Текст не заполнен";
		//$messageName="<p >ЗАПОЛНИ ТЕКСТ </p>";
		$messageLastName='не корректный или пустой текст';
	}
}
?>