//alert("Приём");
$(document).ready(function() {
  //alert("!!!");
  $('.personal-account_profile_form').submit(function(e) { // проверка на пустоту заполненных полей. Атрибут html5 — required не подходит (не поддерживается Safari)
  // alert("fff");
   e.preventDefault();
     $('#result').addClass('active');//# - обращение по id
    // Получение данных из формы (пример обращение по атрибуту name)
    let name = document.querySelector('input[name="form_input-name"]');
    let secondName = document.querySelector('input[name="form_input-second-name"]');
    let lastName = document.querySelector('input[name="form_input-last-name"]');
    let email = document.querySelector('input[name="form_input-Email"]');
    let phone = document.querySelector('input[name="form_input-phone"]');
    let anotherPhone = document.querySelector('input[name="form_input-anotherPhone"]');

    //проверка полей заполнения:
    if (email.value == '')//укажите свой e-mail
    {
      alert("f");
      $('#result__email').html('<span style="color: red; position: absolute;width: 100%;font-size: 14px;margin-left: 15px;margin-top: 15px;">Укажите свой e-mail</span>');
    }
    else
    {
      $('#result__email').html('<span style="display: none;">Заполните данное поле</span>');
    }
    //проверка фио
    if (name.value == '')
    {
      $('#result__name').html('<span style="color: red; position: absolute;width: 100%;font-size: 14px;margin-left: 15px;margin-top: 15px;">Заполните данное поле</span>');
    }
    else
    {
      $('#result__name').html('<span style="display: none;">Заполните данное поле</span>');
    }

    if (secondName.value == '')
    {
      $('#result__second-name').html('<span style="color: red; position: absolute;width: 100%;font-size: 14px;margin-left: 15px;margin-top: 15px;">Заполните данное поле</span>');
    }
    else
    {
      $('#result__second-name').html('<span style="display: none;">Заполните данное поле</span>');
    }

    if (lastName.value == '')
    {
      $('#result__last-name').html('<span style="color: red; position: absolute;width: 100%;font-size: 14px;margin-left: 15px;margin-top: 15px;">Заполните данное поле</span>');
    }
    else
    {
      $('#result__last-name').html('<span style="display: none;">Заполните данное поле</span>');
    }
    //проверка номера:
    if(phone=='')
    {
    $('#result__phone').html('<span style="color: red; position: absolute;width: 100%;font-size: 14px;margin-left: 15px;margin-top: 15px;">укажите свой номер</span>');
    }
    else
    {
      $('#result__phone').html('<span style="display: none;"></span>');
    }
    if (phone==anotherPhone)
    {
      $('#result__phone').html('<span style="color: red; position: absolute;width: 100%;font-size: 14px;margin-left: 15px;margin-top: 15px;">Дополнительный номер совпадает с основным</span>');
    }
    else
    {
      $('#result__phone').html('<span style="display: none;"></span>');
    }

    //ajax запрос:
      $.ajax({
    url: 'form.php',
    type: 'POST',
    data: $(this).serialize(),
    dataType: 'html',
    success: function(response) {
      $('#result').html(response);
    },
    error: function(error){
      $('#result').html(error);
    }
    });
    /*
    $.ajax({
      type: "POST",
      url: "form.php",
      data: $(this).serialize()
    });
*/
  });
});