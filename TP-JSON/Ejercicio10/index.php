<html>
	<head>
		<script type="text/javascript" src="jquery.js"></script>
		<script type="text/javascript">
			function Mostrar()
			{			
				var pagina="administrarCiudades.php";				

				$.ajax({
					url: pagina,
					type: 'POST',
					dataType: "json",
					async: true,
				})
				.done(function (respuesta){								
					

					var tabla = '<table class="table">';
					tabla +=	'	<thead style="background:rgb(14, 26, 112);color:#fff;">';
					tabla +=	'		<tr>';
					tabla +=	'			<th rowspan="2">  ID </th>';
					tabla +=	'				<th rowspan="2">  NOMBRE </th>';
					tabla +=	'					<th rowspan="2">  Pais  </th>';		
					tabla +=	'						<th colspan="2" rowspan="2">';
					tabla +=	'							<table style="width:100%;">';
					tabla +=	'									<tr colspan="2">';	
					tabla +=	'										<td style="text-align:center;color:#fff;" colspan="2">  Coordenadas </td>';
					tabla +=	'								    </tr>';
					tabla +=	'								<tr colspan="2">';
					tabla +=	'										<td style="text-align:center;color:#fff;"> LON </td>';
					tabla +=	'										<td style="text-align:center;color:#fff;"> LAT </td>';
					tabla +=	'									</tr>';
					tabla +=	'							</table>';
					tabla +=	'						</th>';
					tabla +=	'					</tr>';
					tabla +=	'				</thead>';
							
					for (var i = 0; i < respuesta.length; i++) 
		            {
		                tabla+='<tr>';
		                tabla+='<td>'+respuesta[i]._id+'</td>';
		                tabla+='<td>'+respuesta[i]["name"]+'</td>';
		                tabla+='<td>'+respuesta[i].country+'</td>';
		                tabla+='<td>'+respuesta[i]["coord"].lon+'</td>';
		                tabla+='<td>'+respuesta[i]["coord"].lat+'</td>';		                
		                tabla+='</tr>';  
		            }
					
					tabla += '</table>';
					
		            $("#marca").html(tabla);
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