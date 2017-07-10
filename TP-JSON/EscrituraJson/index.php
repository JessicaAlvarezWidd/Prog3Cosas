<html>
	<head>
		<script type="text/javascript" src="jquery.js"></script>
		<script type="text/javascript">
			function Mostrar()
			{			
				var pagina="escribir.php";				

				$.ajax({
					url: pagina,
					type: 'POST',
					dataType: "text",
					async: true,
				})
				.done(function (respuesta){
							alert(respuesta);	
				})
				 
				
			}
		</script>

	</head>

	<body>
		<input type="button" value="mostrar" onclick="Mostrar()"/>
		<div id="marca">

		</div>
	</body>

</html>