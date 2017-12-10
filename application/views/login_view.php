<!DOCTYPE html>
	<html lang="es">
	<head>  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

		
		<style type="text/css">
		 	h1{
		 		font-size: 22px;
		 		text-align: center;
		 		margin: 20px 0px;
		 	}
		 	#login{
		 		background: #fefefe;
		 		min-height: 500px;
		 	}
		 	#formulario_login{
		 		font-size: 14px;
		 		border: 8px solid #112233;		 		
		 	}
		 	label{
		 		display: block;
		 		font-size: 16px;
		 		color: #333333;
		 		font-weight: bold;
		 	}
		 	input[type=text],input[type=password]{
		 		padding: 10px 6px;
		 		width: 400px;
		 	}
		 	input[type=submit]{
		 		padding: 5px 40px;
		 		background: #61399d;
		 		color: #fff;
		 	}
		 	#campos_login{
		 		margin: 50px 0px;
		 	}
		 	p{
		 		color: #f00;
		 		font-weight: bold;
		 	}
		 </style>	  	 

	</head>
	<body>
	  
	  
	    
	<?php
	$username = array('name' => 'username', 'placeholder' => 'nombre de usuario');
	$password = array('name' => 'password',	'placeholder' => 'introduce tu password');
	$submit = array('name' => 'submit', 'value' => 'Iniciar sesion', 'title' => 'Iniciar sesion');
	?>
       
	    <div class="container"> 	
	   <br>
	   
	    <div class="alert alert-info alert-dismissable fade in">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
           <center> <strong>Antonio Cruz Jerez y Francisco Marquez Cubero </strong><br> Practica para la asignatura de Aplicaciones Seguras en la Nube</center>
        </div>
       
        
		<h1>Formulario de login con varios perfiles de usuario</h1>
		
		
	
    		 <div class="jumbotron">
		<div class="form-group">
			
					<?=form_open(base_url().'login/new_user')?>
					<label for="username"><span class="glyphicon glyphicon-user"></span> Nombre de usuario:</label>
					<?=form_input($username)?><p><?=form_error('username')?></p>
					<label for="password"><span class="glyphicon glyphicon-lock"></span> Introduce tu password:</label>
					<?=form_password($password)?><p><?=form_error('password')?></p>
					<?=form_hidden('token',$token)?>
					<?=form_submit($submit)?>
					<?=form_close()?>
					<?php 
					if($this->session->flashdata('usuario_incorrecto'))
					{
					?>
					<p><?=$this->session->flashdata('usuario_incorrecto')?></p>
					<?php
					}
					?>
		</div>
		</div>
		</div>
	
		    
		 
		 
		


		
		
<center>
		<img src="http://programacion.net/files/article/20170303120334_codeigniter.png" class="img-responsive" alt="CodeIgniter" width="304" height="236">
		</center>   
		    

	
	</body>
</html>