<!DOCTYPE html>
<html>
<head>
	<title>Peliculas</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body style="background-color:blue;"> 
	<?php header('Access-Control-Allow-Origin: *'); ?>
	<div align="center" style="margin:20px 0px; "> 
		<button onclick="mostrarPeliculas()" class="btn btn-primary btn-success btn-lg">Listado de Peliculas</button>
	</div>
	<div class="container" id="container" align="center"></div>
</body>
</html>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript">

	function mostrarPeliculas(argument) {
		//$.get('http://localhost/examen/datos.txt', function(data) { 
		$.get('http://dessinnoweb.com/examen/datos.txt', function(data) {    

			var lines = data.split("\n");
			var arrayObjects = [];

			$.each(lines, function(n, elem) {
		       	var li=elem.split(",");

		       	arrayObjects.push({
		       		'Numero':li[0], 
		       		'Titulo':li[1], 
		       		'Duracion':li[2], 
		       		'Director':li[3],
		       		'Anio':li[4],
		       		'Imagen':li[5],
		       	});
	       	});

			$.each(arrayObjects, function(key, data) {
				$('#container').append(
					'<h3 >'+ data['Numero'] + " - " + data['Titulo'] + '</h3>'+
					'<h5 >'+ data['Director'] + '</h5>'+
					'<img class="img-thumbnail" src="peliculas/'+data['Imagen']+'"/>'
				);

			});

		});
	}

</script>