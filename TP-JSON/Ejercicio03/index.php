<html>

	<head>
		<script type="text/javascript" src="jquery.js"></script>
		<script type="text/javascript">
			function Mostrar()
			{
				var objson={"Codigo": "001","Producto":"Chocolate","Precio":"20"};

				//var dato=JSON.stringify(objson);
				var pagina="mostrarJson.php";				

				 $.ajax({
				        type: 'POST',
				        url: pagina,
				        data:{miobjeto : objson},
				        dataType: "text",
				        async: true
				    })
					.done(function (resultado) {
						alert(resultado);
					})
				
			}
		</script>

	</head>

	<body>
		<input type="button" value="mostrar" onclick="Mostrar()"/>
	</body>

</html>