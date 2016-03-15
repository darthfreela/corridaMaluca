//mascara para telefone
//mascara para o celular
$(document).ready(function(){
	var count = 0 //contador de digitos 
	/*efeito div decendo*/
	$('.divCai').hide();
	//mascara ddo telefone
	$('#telefone').mask("(99) 9999-9999");
	//verifica se foi precionado enter
	$('#telefone').keypress(function(e){
		var tecla = (e.keyCode?e.keyCode:e.whitch);
		count++;
		if(tecla == 13 && count > 10){
			/*efeito div decendo*/
			$('.divCai').slideDown();

			//redirecionando
	var novaURL = "http://www.codigofonte.com.br/";
	$(window.document.location).attr('href',novaURL);
		}
		if(tecla == 08){
			count--;
		}
	});

	


});