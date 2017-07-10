<html>

	<head>
		<script type="text/javascript" src="jquery.js"></script>
		<script type="text/javascript">
			function Mostrar()
			{			
				var pagina="traerJson.php";				

				$.ajax({
					url: pagina,
					type: 'POST',
					dataType: "json",
					async: true,
				})
				.done(function (respuesta){
					
					$('#id').val(respuesta.Id);
					$('#marca').val(respuesta.Marca);
					$('#Precio').val(respuesta.Precio);
					$('#Color').val(respuesta.Color);
					$('#Modelo').val(respuesta.Modelo);
				})
				 
				
			}
		</script>

	</head>

	<body>
		<input type="button" value="mostrar" onclick="Mostrar()"/>
		<input type="text" id="id"/>
		<input type="text" id="marca"/>
		<input type="text" id="Precio"/>
		<input type="text" id="Color"/>
		<input type="text" id="Modelo"/>
		<div>
		</div>
	</body>

</html>