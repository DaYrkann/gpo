/* Note: {} Permet l'annulation d'une attributioni*/

/**
* @File cancel.js
* @autor Yann Le Gall
* @version 1.0
*/

$(document).ready(()=> {
	$('input[type=radio]').on('click', ()=> {
		$('#btn_valider').removeAttr('hidden');
		$('#btn_valider').on('click', ()=> {
			$('#cancel').submit();
		});
	});	
});

