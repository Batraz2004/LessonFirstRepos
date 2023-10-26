
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="styles/style.css">
</head>
<body>
	<main class="main">
		<div class="container">
			<h2 class="personal-account_title">Мой кабинет</h2>
			<div class="personal-account_inner">
				<div class="account_sidebar">
					<div class="account_user-info">
							<div class="account_user-info-box">
							<p class="account-name">Михаил Мингалёв</p>
							<p class="account-status">Покупатель</p>
							</div>
						</div>

					<div class="account_sidebar-nav">
						<ul class="account_nav-list">
							<li class="account_nav-list-item"><a href="#" class>Мой профиль</a></li>
							<li class="account_nav-list-item"><a href="#" class>Statut club</a></li>
							<li class="account_nav-list-item"><a href="#" class>Заказы</a></li>
							<li class="account_nav-list-item"><a href="#" class>Избранные товары</a></li>
							<li class="account_nav-list-item"><a href="#" class>Отзывы о товарах</a></li>
							<li class="account_nav-list-item account_nav-list-item--exit"><a href="#" class>Выход</a></li>
						</ul>
					</div>
				</div>
				<div class="personal-account_profile">
					<h2 class="personal-account_profile-title">мой профиль</h2>
					<div class="personal-account_profile_switch">
						<div class="personal-account_profile_switch-button"><p>Личные данные</p></div>
						<div class="personal-account_profile_switch-button"><p>Адреса доставки</p></div>
						<div class="personal-account_profile_switch-button"><p>Пароль</p></div>
					</div>
						<form action="" class="personal-account_profile_form" name="account_profile_form" method="post">
							<p class="personal-account_profile_form-text">E-mail <span>*</span></p>

							<input type="email" name="form_input-Email" class="personal-account_profile-input personal-account_profile-input_decr"  value="mingalyovuxcheck@gmail.com"><span id="result__email"></span>
							<p class="message_email"><?php $messageEmail ?></p>
							<lable class="personal-account_profile_form-lable-number">
								<div class="personal-account_profile_form-lable-number-block">
									<p class="personal-account_profile_form-text">Номер телефона <span>*</span></p>
									 <input type="tel" name="form_input-phone"
									 class="personal-account_profile-input-phone personal-account_profile-input_decr" value="+7 910 832 26 28" >
								</div>
								<div class="personal-account_profile_form-lable-number-block">
									<p class="personal-account_profile_form-text">Дополнительный номер</p>
									 <input type="tel" name="form_input-anotherPhone"
									 class="personal-account_profile-input-phone personal-account_profile-input_decr">
								</div>
								<span id="result__phone"></span>
							</lable>
							<p class="personal-account_profile_form-text">Фамилия <span>*</span></p>
							<input type="text" name="form_input-second-name" class="personal-account_profile-input personal-account_profile-input_decr" value="Мингалёв" ><span id="result__second-name"></span>
							<p class="message message_second-name"><?php echo $messageSecondName ?></p>

							<p class="personal-account_profile_form-text">Имя <span>*</span></p>
							<input type="text" name="form_input-name" class="personal-account_profile-input personal-account_profile-input_decr"  value="Михаил"> <span id="result__name"></span>
							<!--<p class="message message_name"></p>-->
							<p class="message message_name"><?php echo $messageName ?></p>

							<p class="personal-account_profile_form-text">Отчество</p>
							<input type="text" name="form_input-last-name" class="personal-account_profile-input personal-account_profile-input_decr" value="Михайлович" ><span id="result__last-name"></span>
							<p class="message message_last-name"><?php echo $messageLastName ?></p>
							<p class="personal-account_profile_form-lable-date_text">Дата рождения</p>
							<label class="personal-account_profile_form-lable-date">
							<div class="personal-account_profile_form-lable-date_box">
									<select name="day" id="" class="personal-account_profile_form-lable-date_day">
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
										<option value="9">9</option>
										<option value="10">10</option>
										<option value="11">11</option>
										<option value="12">12</option>
										<option value="13">13</option>
										<option value="14">14</option>
										<option value="15">15</option>
										<option value="16">16</option>
										<option value="17">17</option>
										<option value="18">18</option>
										<option value="19">19</option>
										<option value="20">20</option>
										<option value="21">21</option>
										<option value="22">22</option>
										<option value="23">23</option>
										<option value="24">24</option>
										<option value="25">25</option>
										<option value="26">26</option>
										<option value="27">27</option>
										<option value="28">28</option>
										<option value="29">29</option>
										<option value="30">30</option>
										<option value="31">31</option>
									</select>
								</div>
								<div class="personal-account_profile_form-lable-date_box">
									<select name="month" id="" class="personal-account_profile_form-lable-date_month">
										<option value="Январь">Январь</option>
										<option value="Февраль">Февраль</option>
										<option value="Март">Март</option>
										<option value="Апрель">Апрель</option>
										<option value="Май">Май</option>
										<option value="Июнь">Июнь</option>
										<option value="Июль">Июль</option>
										<option value="Август">Август</option>
										<option value="Сентябрь">Сентябрь</option>
										<option value="Октябрь">Октябрь</option>
										<option value="Ноябрь">Ноябрь</option>
										<option value="Декабрь">Декабрь</option>
									</select>
								</div>
								<div class="personal-account_profile_form-lable-date_box">
									<select name="year" id="" class="personal-account_profile_form-lable-date_year">
										<option value="1993">1993</option>
										<option value="1994">1994</option>
										<option value="1995">1995</option>
										<option value="1996">1996</option>
										<option value="1997">1997</option>
										<option value="1998">1998</option>
										<option value="1999">1999</option>
										<option value="2000">2000</option>
										<option value="2001">2001</option>
										<option value="2002">2002</option>
										<option value="2003">2003</option>
										<option value="2004">2004</option>
										<option value="2005">2005</option>
										<option value="2006">2006</option>
										<option value="2007">2007</option>
										<option value="2008">2008</option>
										<option value="2009">2009</option>
										<option value="2010">2010</option>
										<option value="2011">2011</option>
										<option value="2012">2012</option>
										<option value="2013">2013</option>
										<option value="2014">2014</option>
										<option value="2015">2015</option>
										<option value="2016">2016</option>
										<option value="2017">2017</option>
										<option value="2018">2018</option>
										<option value="2019">2019</option>
										<option value="2020">2020</option>
										<option value="2021">2021</option>
										<option value="2022">2022</option>
										<option value="2023">2023</option>
									</select>
								</div>
							</label>
							<p class="personal-account_profile_form-lable-date_text">Пол</p>
							<div class="personal-account_profile_form-lable_gender">
								<!--
								<input type="radio"class="personal-account_profile_form_lable_gender-button gender-man"name="button_gender">
								<input type="radio"class="personal-account_profile_form_lable_gender-button gender-woman"name="button_gender">-->
								<label class="personal-account_profile_form_lable_gender-button gender-man">
								  <input type="radio" name="button_gender" value="m">
								  <p class="radio_text">мужской</p>
								</label>
								<label class="personal-account_profile_form_lable_gender-button gender-woman">
								  <input type="radio" name="button_gender" value="f">
								  <p class="radio_text">женский</p>
								</label>
							</div >
							<button type="submit" class="personal-account_profile_save-button">
								<p>Сохранить изменения</p>
							</button>
						</form>
						<div id="result"></div>
				</div>
			</div>
		</div>
	</main>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
	<script src="main.js"></script>

</body>
</html>