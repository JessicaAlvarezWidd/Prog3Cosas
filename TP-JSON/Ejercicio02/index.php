<html>

	<head>
		<script type="text/javascript" src="jquery.js"></script>
		<script type="text/javascript">
			function Mostrar()
			{
				var objson=[{"Codigo": "001","Producto":"Chocolate","Precio":"20"},{"Codigo": "002","Producto":"jabon","Precio":"10"},{"Codigo": "003","Producto":"Ppas","Precio":"30"}];

				for (var i = 0; i < objson.length ; i++) 
				{
					alert(objson[i].Codigo+"-"+objson[i].Producto+"-"+objson[i].Precio);
				}

			}
		</script>

	</head>

	<body>
		<input type="button" value="mostrar" onclick="Mostrar()"/>
	</body>

</html>
