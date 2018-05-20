$('#calcularFrete').click(function(e){
	e.preventDefault();
	var url = window.location.href;
   var arr = url.split("/");
   if(arr[2] == "localhost"){
     var base_url = arr[0] + "//" + arr[2] + "/"+ arr[3] +"/" ;
   }else{
   	var base_url = arr[0] + "//" + arr[2] + "/"+ arr[3] + "/";
   }

	var cep = $('#enderecoCep').val();

	 $.ajax({
	     url: base_url + 'calcular_frete',
	     type: 'POST',
	     data: {cep: cep},
	     success: function (dados) {
	     	$('#frete_valor').text('R$ '+dados.valor[0]);
	     	$('#frete_dias').text('prazo de '+dados.prazo);

	     	var subtotal = parseFloat($('#subtotalhidden').val());
	     	var frete = parseFloat(dados.valor[0]);
	     	var somafrete = frete + subtotal;
	     	$('#subtotalSpan').text('R$ '+somafrete+' á vista');
	     	$('#parcelas').text('ou em até 5x de R$'+ somafrete/5+ ' sem juros');
	     }

    });
});