// Note: {} Contrôle les champs du formulaire de connexion

/**
* @File connect.js
* @autor Yann Le Gall
* @version 1.0
*/

/**
* Affiche "Champs requis" si les champs sont vides
*/

$(()=> {
	$(document).ready(()=> {
		$('#btn_connect').on('click', ()=> {
			let login = $('#login').val();
			let password = $('#password').val();
			if(password='' && login == '' || (password == '' || login == '')) {
				$('#password').css({borderColor: 'red'});
				$('#login').css({borderColor: 'red'});
				$('#error').css({color: 'red'}).text("Champs requis");
				setTimeout(()=> {
					$('#password').css({borderColor: '#ced4da'});
					$('#login').css({borderColor: '#ced4da'});
					$('#error').css({color: 'red'}).text("");
				}, 5000);
			} else {
				$('#Connection').submit();
			}
		});
	});
});