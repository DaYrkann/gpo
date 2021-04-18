// Note: {} Permet la navigation dans l'application

/**
* @File navApp.js
* @autor Yann Le Gall
* @version 1.0
*/

$(()=> {
	$(document).ready(()=> {
		$('#btn_users').on('click', ()=>{
			$('#utilisateur').submit();
		});
		$('#btn_comp').on('click', ()=>{
			$('#poste').submit();
		});
		$('#btn_attrib').on('click', ()=>{
			$('#attribution').submit();
		});
		$('#btn_nav_deconnect').on('click', ()=>{
			$('#deconnexion').submit();
		});
		$('#btn_return').on('click', ()=> {
			$('#home').submit();
		})
	});
});