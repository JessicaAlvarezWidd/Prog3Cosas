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
<br/>
<br/>
		INGRESAR REMERA
		<br/>
		<input type="text" id="_id">
		<br/>
		<input type="text" id="slogan">
		<br/>
		<input type="text" id="tamano">
		<br/>
		<input type="text" id="price">
		<br/>
		<input type="text" id="color">
		<br/>
		<input type="text" id="nombre">
		<br/>
		<input type="text" id="country">
		<br/>
		<input type="text" id="city">
		<br/>
		<input type="button" value="Agregar" onclick="agregar()">

		<div id="tabladatos"></div>
	</body>

</html>