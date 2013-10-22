<?php
  
  $host = '127.0.0.1';
  $user = 'activerecord';
  $password = 'activerecord';
  $db = 'user';
  $port = '3306';


  require_once '../phpactiverecord/ActiveRecord.php';

  ActiveRecord\Config::initialize(function($cfg){
	  $cfg->set_model_directory('../models');
	  $cfg->set_connections(array('development'=>'mysql://activerecord:activerecord@localhost/user'));
	  #$cfg->set_connections(array('development'=>'mysql://' . $user . ':' . $password . '@' . $host . ':' . $port . '/' . $db));
  });


?>
