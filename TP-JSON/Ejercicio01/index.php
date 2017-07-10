<html>

	<head>
		<script type="text/javascript" src="jquery.js"></script>
		<script type="text/javascript">
			function Mostrar()
			{
				var objson={"Codigo": "001","Producto":"Chocolate","Precio":"20"};

				alert(objson.Codigo+"-"+objson.Producto+"-"+objson.Precio);

			}
		</script>

	</head>

	<body>
		<input type="button" value="mostrar" onclick="Mostrar()"/>
	</body>

</html>
