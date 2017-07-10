
function Mostrar()
			{			
				var pagina="administrarRemeras.php";				

				$.ajax({
					url: pagina,					
					type: 'POST',
					data: {"quehago":"Mostrar"},
					dataType: "json",
					async: true,
				})
				.done(function (respuesta){									

					var tabla = '<table class="table">';
					tabla +=	'	<thead style="background:rgb(14, 26, 112);color:#fff;">';
					tabla +=	'		<tr>';
					tabla +=	'			<th rowspan="2">  ID </th>';
					tabla +=	'				<th rowspan="2">  Slogan </th>';
					tabla +=	'					<th rowspan="2">  Talla  </th>';
					tabla +=	'					<th rowspan="2">  Precio  </th>';
					tabla +=	'					<th rowspan="2">  Color  </th>';		
					tabla +=	'						<th colspan="2" rowspan="2">';
					tabla +=	'							<table style="width:100%;">';
					tabla +=	'									<tr colspan="2">';	
					tabla +=	'										<td style="text-align:center;color:#fff;" colspan="2">  Manofactura </td>';
					tabla +=	'								    </tr>';
					tabla +=	'								<tr colspan="2">';
					tabla +=	'										<td style="text-align:center;color:#fff;"> Nombre </td>';
					tabla +=	'										<td style="text-align:center;color:#fff;"> Logo </td>';
					tabla +=	'									</tr>';
					tabla +=	'							</table>';
					tabla +=	'						</th>';
					tabla +=	'						<th colspan="2" rowspan="2">';
					tabla +=	'							<table style="width:100%;">';
					tabla +=	'									<tr colspan="2">';	
					tabla +=	'										<td style="text-align:center;color:#fff;" colspan="2">  Locacion </td>';
					tabla +=	'								    </tr>';
					tabla +=	'								<tr colspan="2">';
					tabla +=	'										<td style="text-align:center;color:#fff;"> Pais  </td>';
					tabla +=	'										<td style="text-align:center;color:#fff;"> Ciudad </td>';
					tabla +=	'									</tr>';
					tabla +=	'							</table>';
					tabla +=	'						</th>';
					tabla +=	'					</tr>';
					tabla +=	'				</thead>';
							
					for (var i = 0; i < respuesta.length; i++) 
		            {
		                tabla+='<tr>';
		                tabla+='<td>'+respuesta[i]["id"]+'</td>';
		                tabla+='<td>'+respuesta[i]["slogan"]+'</td>';
		                tabla+='<td>'+respuesta[i]["size"]+'</td>';
		                tabla+='<td>'+respuesta[i]["price"]+'</td>';
		                tabla+='<td>'+respuesta[i]["color"]+'</td>';
		                tabla+='<td>'+respuesta[i]["manofacturer"]["name"]+'</td>';
		                tabla+='<td><img src="'+respuesta[i]["manofacturer"]["logo"]+'"></img></td>';
		                tabla+='<td>'+respuesta[i]["manofacturer"]["location"]["country"]+'</td>';
		                tabla+='<td>'+respuesta[i]["manofacturer"]["location"]["city"]+'</td>';	                
		                tabla+='</tr>';  
		            }
					
					tabla += '</table>';
					
		            $("#tabladatos").html(tabla);
				})
				 
				
			}

	function Filtrar()
			{			
				var pagina="administrarRemeras.php";				
				var pais=$("#pais").val();

				$.ajax({
					url: pagina,					
					type: 'POST',
					data: {"quehago":"traerRemerasFiltradas","dato":pais},
					dataType: "json",
					async: true,
				})
				.done(function (respuesta){									

					var tabla = '<table class="table">';
					tabla +=	'	<thead style="background:rgb(14, 26, 112);color:#fff;">';
					tabla +=	'		<tr>';
					tabla +=	'			<th rowspan="2">  ID </th>';
					tabla +=	'				<th rowspan="2">  Slogan </th>';
					tabla +=	'					<th rowspan="2">  Talla  </th>';
					tabla +=	'					<th rowspan="2">  Precio  </th>';
					tabla +=	'					<th rowspan="2">  Color  </th>';		
					tabla +=	'						<th colspan="2" rowspan="2">';
					tabla +=	'							<table style="width:100%;">';
					tabla +=	'									<tr colspan="2">';	
					tabla +=	'										<td style="text-align:center;color:#fff;" colspan="2">  Manofactura </td>';
					tabla +=	'								    </tr>';
					tabla +=	'								<tr colspan="2">';
					tabla +=	'										<td style="text-align:center;color:#fff;"> Nombre </td>';
					tabla +=	'										<td style="text-align:center;color:#fff;"> Logo </td>';
					tabla +=	'									</tr>';
					tabla +=	'							</table>';
					tabla +=	'						</th>';
					tabla +=	'						<th colspan="2" rowspan="2">';
					tabla +=	'							<table style="width:100%;">';
					tabla +=	'									<tr colspan="2">';	
					tabla +=	'										<td style="text-align:center;color:#fff;" colspan="2">  Locacion </td>';
					tabla +=	'								    </tr>';
					tabla +=	'								<tr colspan="2">';
					tabla +=	'										<td style="text-align:center;color:#fff;"> Pais  </td>';
					tabla +=	'										<td style="text-align:center;color:#fff;"> Ciudad </td>';
					tabla +=	'									</tr>';
					tabla +=	'							</table>';
					tabla +=	'						</th>';
					tabla +=	'					</tr>';
					tabla +=	'				</thead>';
							
					for (var i = 0; i < respuesta.length; i++) 
		            {
		                tabla+='<tr>';
		                tabla+='<td>'+respuesta[i]["id"]+'</td>';
		                tabla+='<td>'+respuesta[i]["slogan"]+'</td>';
		                tabla+='<td>'+respuesta[i]["size"]+'</td>';
		                tabla+='<td>'+respuesta[i]["price"]+'</td>';
		                tabla+='<td>'+respuesta[i]["color"]+'</td>';
		                tabla+='<td>'+respuesta[i]["manofacturer"]["name"]+'</td>';
		                tabla+='<td><img src="'+respuesta[i]["manofacturer"]["logo"]+'"></img></td>';
		                tabla+='<td>'+respuesta[i]["manofacturer"]["location"]["country"]+'</td>';
		                tabla+='<td>'+respuesta[i]["manofacturer"]["location"]["city"]+'</td>';	                
		                tabla+='</tr>';  
		            }
					
					tabla += '</table>';
					
		            $("#tabladatos").html(tabla);
				})
				 
				
			}		