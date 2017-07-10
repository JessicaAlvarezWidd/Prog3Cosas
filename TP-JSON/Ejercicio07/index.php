<html>

	<head>
		<script type="text/javascript" src="jquery.js"></script>
		<script type="text/javascript">
			function Mostrar()
			{			
				var pagina="traerAuto.php";				

				$.ajax({
					url: pagina,
					type: 'POST',
					dataType: "json",
					async: true,
				})
				.done(function (respuesta){
					alert(respuesta.Marca);
				})
				 
				
			}
		</script>

	</head>

	<body>
		<input type="button" value="mostrar" onclick="Mostrar()"/>
	</body>

</html>