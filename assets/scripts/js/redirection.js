/* Note: {} Petit gadjet permettant la redirection vers la page d'acceuil, 
après le message Connecté avec succès*/

/**
* @File connect.js
* @autor Yann Le Gall
* @version 1.0
*/

$(()=> {
	$(document).ready(()=> {
		setTimeout(()=> {
			$('#redirection').submit();
		}, 5000);
	});
});