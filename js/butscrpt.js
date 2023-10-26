/*
$('.personal-account_profile_form').submit(function(e)
	{
		alert("какой-то текст" );
		e.preventdefault();//стандартное событие браузера что бы страница не перезагружалась
		let th=$(this);//сама форма
		let name = $('#form_input-name').val();
	  	let lastName = $('form_input-last-name').val();
	  	let secondName = $('#form_input-second-name').val();
	  	let email = $('#form_input-Email').val();

	  	if (name === '' ) // Проверка на пустое поле в "Имя"
	  	{
			$('#form_input-name').html('<span style="color: red; position: absolute;width: 100%;font-size: 14px;margin-left: 15px;margin-top: 15px;">Заполните ваше имя</span>');
	  	}
	  	$.ajax({
		// пост запрос  :
		url: '/php/form.php',
		method: 'POST',
		data: th.serialize(),
		dataType: 'html',
		success: function(response) {
		  $('#result').html(response);
		},
		error: function(error){
			$('#result').html(error);
		}
	});
*/

$(function(){
   	//let name=$()
	$.ajax({
		// пост запрос  :
		url: '/php/form.php',
		method: 'POST',
		data: {
			phone: '',
			email: '',
			name:'form_input-name',
			gender: '',
		},
		dataType: 'json',
		success: function(msg) {//получаю обратно:
			console.log(msg.succes);
			$('input[name=phone] + .error').html(msg.errors.phone)
		}
	});
	/*
	$('.gender-man').on('click', function(){
		$('.gender-man ').addClass('gender-man--active')
		$('.gender-woman ').removeClass('gender-woman--active')
	});
	$('.gender-woman').on('click', function(){
		$('.gender-woman').addClass('gender-woman--active')
		$('.gender-man ').removeClass('gender-man--active')
	});*/
//});
//*/
