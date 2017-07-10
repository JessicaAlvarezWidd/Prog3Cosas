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
						for (var i = 0; i < resultado.length; i++) {
							
							alert(resultado[i].Codigo+"-"+resultado[i].Producto);
						}
					})
				
			}
		</script>

	</head>

	<body>
		<input type="button" value="mostrar" onclick="Mostrar()"/>
	</body>

</html>