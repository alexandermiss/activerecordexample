<?php

	
	if(isset($_POST['submit'])){

	require_once '../config/db.php';

	$usuario = User::find_by_userid($_POST['userid']);
		
		$usuario->username = $_POST['username'];
		$usuario->lastname = $_POST['lastname'];
		$usuario->password = md5($_POST['password']);

		if($usuario->save()){
			header('Location: list.php');
			
		}

		#$usuario->update_attributes(array('username'=>$username, 'lastname'=> $lastname, 'password'=>$password));

		#$usuario->username = $_POST['username'];
		#$usuario->lastname = $_POST['lastname'];
		#$usuario->password = md5($_POST['password']);

		#echo $usuario->userid;
		#echo $usuario->username;
		#echo $usuario->lastname;
		#echo $usuario->password;

		
	}


?>