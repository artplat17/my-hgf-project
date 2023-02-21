;(function($, document) {
	$('#username').change(function() {
		var username = $('#username').val();

		$.ajax({
			url: nameCheckRoute,
			type: 'POST',
			data: {username : username},
			success: function (count){
				if (count == 0) {
					$('#name_available').html("<span class='item-available'>" + nameAvailable + '</span>');
				}
				else {
					var notAvailable = nameNotAvailable.replace('%1$s', username);
					$('#name_available').html("<span class='item-not-available'>" + notAvailable + '</span>');
				}
			}
		});
	});
	$('input#username').after('<div id="name_available"></div>');

	$('#email').change(function() {
		var email = $('#email').val();

		$.ajax({
			url: emailCheckRoute,
			type: 'POST',
			data: {email : email},
			success: function (count){
				if (count == 0) {
					$('#email_available').html("<span class='item-available'>" + emailAvailable + '</span>');
				}
				else {
					var notAvailable = emailNotAvailable.replace('%1$s', email);
					$('#email_available').html("<span class='item-not-available'>" + notAvailable + '</span>');
				}
			}
		});
	});
	$('input#email').after('<div id="email_available"></div>');

	$('#password_confirm').change(function() {
		var newPassword = $('#new_password').val();
		var passwordConfirm = $('#password_confirm').val();

		$.ajax({
			url: passwordCheckRoute,
			type: 'POST',
			data: {newPassword: newPassword, passwordConfirm: passwordConfirm},
			success: function (match){
				if (match == 'true') {
					$('#password_available').html("<span class='item-available'>" + passwordMatch + '</span>');
				}
				else {
					$('#password_available').html("<span class='item-not-available'>" + passwordNotMatch + '</span>');
				}
			}
		});
	});
	$('input#password_confirm').after('<div id="password_available"></div>');

})(jQuery, document);
