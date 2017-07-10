<html>

	<head>
		<script type="text/javascript" src="jquery.js"></script>
		<script type="text/javascript">
			function Mostrar()
			{			
				var pagina="enviarJson.php";				

				 $.ajax({
				        type: 'POST',
				        url: pagina,
				        dataType: "json",
				        async: true
				    })
					.done(function (resultado) {
						 
							alert(resultado.Codigo+"-"+resultado.Producto);
						
					})
				
			}
		</script>

	</head>

	<body>
		<input type="button" value="mostrar" onclick="Mostrar()"/>
	</body>

</html>