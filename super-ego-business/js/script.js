$(document).ready(function () {
  $("#form1").submit(function () {
 var formID = $(this).attr('id');
 var formNm = $('#' + formID);
	formNm.find('.form-submit').attr('disabled',true);
 $.ajax({
 type: "POST",
 url: 'js/mail.php',
 data: formNm.serialize(),

 success: function (data) {
	if (data == 'ok') {
		formNm.parent().html('<center>Ваша заявка отправлена!</center>');
	} 
 },
			
			
 error: function (jqXHR, text, error) {
	formNm.find('.form-submit').attr('disabled',false);
 $(formNm).html(error);
 }
 });
 return false;
 });
 

});