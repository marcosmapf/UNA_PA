 $('.codigoEstado').change(function(){

 var url = window.location.href;
   var arr = url.split("/");
   if(arr[2] == "localhost"){
     var base_url = arr[0] + "//" + arr[2] + "/"+ arr[3] +"/" ;
   }else{
   	var base_url = arr[0] + "//" + arr[2] + "/"+ arr[3] + "/";
   }
 	
 
 	var estado = $(this).val();
 
 	$.ajax({
 		type: 'POST',
 		url: base_url + 'cidade_estado_ajax',
 		data: {estado: estado},
 		success: function(data){
 			$('.codigoCidade').html('');
         	$('.codigoCidade').prop('disabled', false);
         	$('.codigoCidade').html(data);
 		}
 	});
 });