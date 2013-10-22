<?php

  require_once '../config/db.php';

	$usuarios = User::find('all');

?>

<!DOCTYPE html>
<html>
<head>
	<title>Listar Usuarios</title>
	<meta charset="UTF-8" />
	<meta name='viewport' content="width=device-width" />
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/estilo.css">
</head>

<body>

  <nav class="navbar navbar-default navbar-inverse" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="../index.php">ActiveRecord</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <!-- <li class="active"><a href="#">Link</a></li>
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li> -->
      </ul> 
      <!-- <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form> -->
      
          <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Users <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="signup.php">Signup</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="list.php">List</a></li>
            <li class="divider"></li>
            <li><a href="#logout">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div>
</nav>


    <div class="container">

      <div class="row">
          <table class="table table-condensed">
              <tr>
                  <th>Hash</th>
                  <th>Nombre</th>
                  <th>Apellido</th>
                  <th>Contraseña</th>
                  <th></th>
                  
              </tr>
              <?php foreach($usuarios as $usuario): ?>
                  <tr>
                      <td><?php echo $usuario->userid; ?></td>
                      <td><?php echo $usuario->username; ?></td>
                      <td><?php echo $usuario->lastname; ?></td>
                      <td><?php echo $usuario->password; ?></td>
                      <td><a href="update.php?userid=<?=$usuario->userid;?>"><span class="glyphicon glyphicon-edit"></span></a>
                      <a href="delete.php?userid=<?=$usuario->userid;?>"><span class="glyphicon glyphicon-remove"></span></a></td>
                  </tr>
              <?php endforeach; ?>
          </table>
      </div>
      
    </div>
    <script type="text/javascript" src="../assets/js/jquery.js"></script>
    <script type="text/javascript" src="../assets/js/bootstrap.js"></script>
</body>
</html>
