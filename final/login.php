
<?php
	
	session_start();
	if (isset($_SESSION["Usuario"]))
		header("location:Principal.php");   
        
?>

<html>
<head>
	<title></title>
	  
        <meta charset="UTF-8">
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script type="text/javascript" src="./js/funcionesLogin.js"></script>
 
</head>
<body>
	<div class="container">
		<div class="page-header">
			<h1>LOGIN</h1>      
		</div>
		<div class="CajaInicio animated bounceInRight">
			<h1></h1>

			<form id="FormIngreso" method="post">
				<input type="text" id="email" placeholder="E-mail" value="" />
				<input type="password" id="password" placeholder="Password" value="" />

				<input type="button" class="btn btn-danger" value="LOGIN" onclick="Login()" />
			</form>
		</div>
		<div style="text-align:center">
		<?php
			if(isset($_GET["uss"])){
				echo "<h1>Usuario sin Sesi&oacute;n Activa!!!</h1>";
			}
		?>
		</div>
	</div>
</body>
</html>



