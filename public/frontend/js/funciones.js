		
$(function (){
	//actualización automatica
	
	//actualiza visat client
	setInterval(function() {
		  $.ajax({
			   type: "POST",
			   url: urlVisat,
			   data: {'tipo' : 1},
			   dataType: "html",
			   success: function(data){
					$('#lista1').html(data);
					},
			   error: function() { alert("error al recargar"); }
			});
		  
		  
	}, 10000);
	
	//actualiza visado Gestor
	setInterval(function() {
		  $.ajax({
			   type: "POST",
			   url: urlVisatG,
			   data: {'tipo' : 1},
			   dataType: "html",
			   success: function(data){
					$('#visatDiv').html(data);
				},
			   error: function() { alert("error al recargar"); }
			});
		  
		  
	}, 10000);
	
	
		
	setInterval(function() {
		  $.ajax({
			   type: "POST",
			   url: urlVisat,
			   data: {'tipo' : 2},
			   dataType: "html",
			   success: function(data){
					$('#lista2').html(data);
					},
			   error: function() { alert("error al recargar"); }
			});
		  
		  
	}, 10000);
	
	//actualiza visado Gestor
	setInterval(function() {
		  $.ajax({
			   type: "POST",
			   url: urlVisatG,
			   data: {'tipo' : 2},
			   dataType: "html",
			   success: function(data){
					$('#secretariaDiv').html(data);
				},
			   error: function() { alert("error al recargar"); }
			});
		  
		  
	}, 10000);
	
	
	setInterval(function() {
		  $.ajax({
			   type: "POST",
			   url: urlVisat,
			   data: {'tipo' : 3},
			   dataType: "html",
			   success: function(data){
					$('#lista3').html(data);
					},
			   error: function() { alert("error al recargar"); }
			});
		  
		  
	}, 10000);
	
	//actualiza visado Gestor
	setInterval(function() {
		  $.ajax({
			   type: "POST",
			   url: urlVisatG,
			   data: {'tipo' : 3},
			   dataType: "html",
			   success: function(data){
					$('#firmaDiv').html(data);
				},
			   error: function() { alert("error al recargar"); }
			});
		  
		  
	}, 10000);
	
	setInterval(function() {
		  $.ajax({
			   type: "POST",
			   url: urlVisat,
			   data: {'tipo' : 4},
			   dataType: "html",
			   success: function(data){
					$('#lista4').html(data);
					},
			   error: function() { alert("error al recargar"); }
			});
		  
		  
	}, 10000);
	
	//actualiza visado Gestor
	setInterval(function() {
		  $.ajax({
			   type: "POST",
			   url: urlVisatG,
			   data: {'tipo' : 4},
			   dataType: "html",
			   success: function(data){
					$('#comptaDiv').html(data);
				},
			   error: function() { alert("error al recargar"); }
			});
		  
		  
	}, 10000);
	
	
	
	//inserta peticion
	$('.btn').click(function(){
		var tipo = $(this).attr('tipo');
		var nom = $('#nom').val();
		var motiu = $('#motiu').val();
		
		$.ajax({
			   type: "POST",
			   url: urlInsert,
			   data: {'tipo' : tipo, 'nom' : nom, 'motiu': motiu},
			   dataType: "html",
			   success: function(data){
				   	$.ajax({
						type: "POST",
					   url: urlVisat,
					   data: {'tipo' : tipo},
					   dataType: "html",
					   success: function(data){
							$('#lista'+tipo).html(data);
							},
					   error: function() { alert("error al recargar"); }
					});
				   
				   
					//$('#visat').html(data);
					},
			   error: function() { alert("error al registrar"); }
		});
		
	});
	
	$( document ).on('click','a.click', function(){		
			var id = $(this).attr('identi');
			var tipo = $(this).attr('tipo');
			var usuario = $('#usuari').val();
			//alert(id +" "+ tipo+" " + usuario);
			$.ajax({
				type: "POST",
				url: urlupdate,
				data: {'tipo' : tipo, 'id' : id, 'usuario' : usuario},
				//dataType: "html",
				success: function(data){
					//$('#lista'+tipo).html(data);
				},
				error: function() { alert("error al recargar"); }
			});
			
		});

});

