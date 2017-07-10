<html>
	<head>
		<script type="text/javascript" src="jquery.js"></script>
		<script type="text/javascript">
			function Mostrar()
			{			
				var pagina="traerAutos.php";				

				$.ajax({
					url: pagina,
					type: 'POST',
					dataType: "json",
					async: true,
				})
				.done(function (respuesta){
					
					var table = '<table style="border:1px solid black; width:100%;">';
						table+='<tr>';
							table+='<td>';
								table+='ID'
							table+='</td>';
							table+='<td>';
								table+='Marca'
							table+='</td>';						
							table+='<td>';
								table+='Precio'
							table+='</td>';
							table+='<td>';
								table+='Color'
							table+='</td>';
							table+='<td>';
								table+='Modelo'
							table+='</td>';
						table+='</tr>';
						
						for (var i = 0; i < respuesta.length; i++) 
						{
							table+='<tr>';
								table+='<td>';
									table+=respuesta[i].Id;
								table+='</td>';
								table+='<td>';
									table+=respuesta[i].Marca;
								table+='</td>';						
								table+='<td>';
									table+=respuesta[i].Precio;
								table+='</td>';
								table+='<td>';
									table+=respuesta[i].Color;
								table+='</td>';
								table+='<td>';
									table+=respuesta[i].Modelo;
								table+='</td>';
							table+='</tr>';
						}

					table+='</table>';
					$("#marca").html(table);
					
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