//mascara para telefone
//mascara para o celular
$(document).ready(function(){
	var count = 0 //contador de digitos 

	//mascara ddo telefone
	$('#telefone').mask("(99) 9999-9999");
	//verifica se foi precionado enter
	$('#telefone').keypress(function(e){
		var tecla = (e.keyCode?e.keyCode:e.whitch);
		count++;
		if(tecla == 13 && count > 10){
			alert('errouu'); //redirecionar par proxima pagina aqui
		}
		if(tecla == 08){
			count--;
		}
	})
})