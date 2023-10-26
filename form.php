<?php


if($_SERVER['REQUEST_METHOD']=='POST')
{
	//данные формы
	$newName=$_POST["form_input-name"];
	$newSecondName=$_POST["form_input-second-name"];
	$newLastName=$_POST["form_input-last-name"];
	$newEmail=$_POST["form_input-Email"];
	$newPhone=$_POST["form_input-phone"];
	$newAltPhone=$_POST["form_input-anotherPhone"];
	$newDateInfo = $_POST["day"] . " / " . $_POST["month"] . " / " . $_POST["year"];
		$newGender = $_POST['radio'];

	$errors=[];

	//проверка  email
	if($newEmail=='')
	{
		$errors[]='<span style="color: #f73939;">не указан email</span> <br>';
	}
	//if(stripos($_POST['form_input-Email'],'mail.ru')==false)
	if(!filter_var($newEmail, FILTER_VALIDATE_EMAIL))
	{
		$errors[]='<span style="color: #f73939;">некоректный email</span> <br>';
	}


	//Проверка корректности фио
	if(strlen($newName) < 2 || strlen($newName) >20) //Проверка длины имени
	{
		$errors[]= '<span style="color: #f73939;">Имя слишком короткое или имеет много символов</span> <br>';
	}
	if(strlen($newSecondName) <= 6 || strlen($newSecondName) > 20) //Проверка длины фамилии
	{
		$errors[]= '<span style="color: #f73939;">Фамилия слишком короткое или имеет много символов</span> <br>';
	}
	if(strlen($newLastName) <= 6 || strlen($newSecondName) > 20) //Проверка длины фамилии
	{
		$errors[]= '<span style="color: #f73939;">Отчество слишком короткое или имеет много символов</span> <br>';
	}

	//проверка на руские символы
	$chr_ru = "А-Яа-яЁё0-9\s`~!@#$%^&*()_+-={}|:;<>?,.\/\"\'\\\[\]";
	if(!preg_match("/^[$chr_ru]+$/u", $newName))
	{
		$errors[]= '<span style="color: #f73939;">не корректное имя</span> <br>';
	}
	if(!preg_match("/^[$chr_ru]+$/u", $newSecondName))
	{
		$errors[]= '<span style="color: #f73939;">не корректное фамилия</span> <br>';
	}
	if(!preg_match("/^[$chr_ru]+$/u", $newLastName))
	{
		$errors[]= '<span style="color: #f73939;">не корректное отчество</span> <br>';
	}

	//проверка корректности телефона
	$patternPhone='/^(\+7|7|8)?[\s\-]?\(?[489][0-9]{2}\)?[\s\-]?[0-9]{3}[\s\-]?[0-9]{2}[\s\-]?[0-9]{2}$/';//для номера телефона
	if($newPhone==''){
		$errors[]='<span style="color: #f73939;">не указан номер</span> <br>';
	}
	if(!preg_match($patternPhone,$newPhone))
	{
		$errors[]='<span style="color: #f73939;">некоректный номер</span> <br>';
	}
	if($newAltPhone!='')
	if(!preg_match($patternPhone,$newAltPhone))
	{
		$errors[]='<span style="color: #f73939;">некоректный дополнительный номер</span> <br>';
	}
	if($newPhone==$newAltPhone){
		$errors[]='<span style="color: #f73939">дополниетльный номер совпадает с основным</span>';
	}
	if (!empty($errors))
	{	//Если обработчик не пустой, то выведет список ошибок
		foreach ($errors as $error)
		{
				echo "<pre>" ; print_r($error );
		}
			echo "<br><br><b>Письмо не может быть отправлено из-за вышеуказанных ошибок</b>";
	}
	else //отправка формы на почту если нет ошибок
	{
		mail("batraz.tolasov@mail.ru", "куку",
		"Имя: " .$newFirstName ."\n".
		"Фамилия: " .$newSecondName ."\n".
		"Отчество: " .$newLastName ."\n".
		"Почта: " .$newEmail ."\n".
		"Телефон: " .$newPhone ."\n".
		"Доп.номер: " .$newAltPhone ."\n".
		"Пол: ".$newGender."\n".
		"Взраст: ".$newDateInfo."\n",
		"site@gmail.com");
		echo '<span style = "color: green">Письмо отправлено успешно</span>';
	}
}
?>