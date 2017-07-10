<html>
	<head>
		<script type="text/javascript" src="jquery.js"></script>	
		<script type="text/javascript" src="misFunciones.js"></script>	

	</head>

	<body>
		<input type="button" value="Mostrar" onclick="Mostrar()">
		
		<br/>
		<input type="text" id="pais">
		<input type="button" value="Filtrar" onclick="Filtrar()">
		<br/>
		<input type="text" id="dato">
		<select id="opcion">
			<option value="Tamano">Tamaño</option>
			<option value="Color">Color</option>
			<option value="Pais">Pais</option>
		</select>
		<input type="button" value="Filtrar Por" onclick="FiltrarDos()">

		<div id="tabladatos"></div>
	</body>

</html>