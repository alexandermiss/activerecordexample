<?php

  require_once '../config/db.php';

  if(isset($_GET['userid'])){
  
    #$usuario = User::find_by_sql('SELECT MD5(userid) as id FROM login WHERE id = ?', array($_GET['userid']));
  
    $usuario = User::find_by_userid($_GET['userid']);
    
    if($usuario->delete()){
      header('Location: list.php');
    }
  }

	

?>


