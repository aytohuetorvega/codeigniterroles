<!DOCTYPE html>
	<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<script src="http://code.jquery.com/jquery-1.8.3.js"></script>
	</head>
	<body>
		<div class="container_12">
			<h1 style="text-align: center; font-size: 22px;margin: 20px 0px;">Bienvenido de nuevo <?=$this->session->userdata('perfil')?></h1>
			<div class="container">
				<table class="table table-striped">
					<tr>
						<th>Marca</th> 
						<th>Modelo</th>
						<th>Editar</th>
						<th>Borrar</th>
					</tr>						
					<?php foreach ($cars as $car):?>
						<tr>
							<td><?php echo htmlspecialchars($car->marca);?></td>
							<td><?php echo htmlspecialchars($car->modelo);?></td>
							<td><span class="glyphicon glyphicon-edit"></span></td>
							<td><span class="glyphicon glyphicon-remove"></span></td>
						</tr>
					<?php endforeach;?>
				</table>						
			</div>
			<div style="text-align: center">
				<a href="#" class="btn btn-success" role="button" >Nuevo coche</a>
			</div>
			<br>
			<div style="text-align: center">
				<a href="<?php echo base_url().'login/logout_ci';?>" class="btn btn-danger" role="button" >Cerrar sesión</a>
			</div>
		</div>
	</body>
</html>