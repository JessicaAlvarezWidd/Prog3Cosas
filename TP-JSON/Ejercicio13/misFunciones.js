function CargarCiudades()
			{			
				var pagina="administrarCiudades.php";	

				var codigo=$("#paises").val();			
				
				$.ajax({
					url: pagina,					
					type: 'POST',
					data: {"objetoEnviar":codigo},
					dataType: "json",
					async: true,
				})
				.done(function (respuesta){								
					var comboSel = '<select>';
							
					for (var i = 0; i < respuesta.length; i++) 
		            {		                
		                comboSel+='<option>'+respuesta[i].Ciudad+" "+respuesta[i].CodigoPais+'</option>';		                
		            }
					
					comboSel += '</select>';
					
		            $("#combo").html(comboSel);
				})				 
				
			}
