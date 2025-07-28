window.onload = function() {
    const form = document.querySelector('.wpcf7');
	if (form) {
		form.addEventListener('wpcf7submit', (event) => {
			jQuery('input[name=conhecimento-legal]').val();
		});

		form.addEventListener('wpcf7mailsent', (event) => {
			console.log('Form submitted successfully');
			Swal.fire({
				icon: 'success',
				title: 'Sucesso!',
				text: 'Mensagem enviada!',
			});
		});
	
		form.addEventListener('wpcf7mailfailed', (event) => {
			console.log('Form submitted error');
			Swal.fire({
				icon: 'error',
				title: 'Ocorreu um erro!',
				text: 'Se o erro persistir, favor contatar o suporte.',
			});
		});
	}
}