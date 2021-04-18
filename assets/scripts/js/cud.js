var code;
$(document).ready(()=> {
	$('#return').on('click', ()=> {
		$('#home').submit();
	});
	$('#btn_create').on('click', ()=> {
		$('#nouveau').removeAttr('hidden');
		$('#btn_valider_create').removeAttr('hidden');
	});
	$('#btn_valider_create').on('click', ()=> {
		let input1 = $('#input1').val();
		let input2 = $('#input2').val();
		let input3 = $('#input3').val();
		let input4 = $('#input4').val();
		if(input1 == '' || input2 == '' || input3 == '' || input4 == '') {
			$('#input2').css({borderColor: 'red'});
			$('#input3').css({borderColor: 'red'});
			$('#input4').css({borderColor: 'red'});
			$('#error').css({color: 'red'}).text("Saisir tous les champs.");
			setTimeout(()=> {
				$('#input2').css({borderColor: '#ced4da'});
				$('#input3').css({borderColor: '#ced4da'});
				$('#input4').css({borderColor: '#ced4da'});
				$('#error').css({color: 'red'}).text('');
			}, 5000);
		} else {
			$('#input1').removeAttr('Disabled');
			$('#new').submit();
		}
	});

	$('#input2').focusout(()=> {
		code = $('#input2').val().substring(0,3);
		$('#input3').removeAttr('disabled');
	});

	$('#input3').focusout(()=> {
		code = code + $('#input3').val().charAt(0).toUpperCase();
		$('#input1').val(code);
	});

	$('#btn_delete').on('click', ()=> {
		$('#cache').attr('hidden');
		$('.delete').removeAttr('hidden');
		$('input[type=radio]').removeAttr('hidden');
		$('input[type=radio]').on('click', ()=> {
			$('#btn_valider_delete').removeAttr('hidden');
			$('#messages').html('Attention ! Suppréssion définitive !')
			$('#messages').css({color: 'red'});
		});
	});

	$('#btn_valider_delete').on('click', ()=> {
		$('#delete').submit();
	});

});
