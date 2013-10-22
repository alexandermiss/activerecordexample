<?php


	if(isset($_POST['submit'])){

  require_once '../config/db.php';

	/* $new_user = array(
		'username' => 'isaac',
		'lastname' => 'hernandez',
		'password' => 'otrousuario'
	); */

/*
	User::create(array(
		'username' => $new_user['username'],
		'lastname' => $new_user['lastname'],
		'password' => $new_user['password']
	));
*/

	User::create(array(
		'username' => $_POST['username'],
		'lastname' => $_POST['lastname'],
		'password' => sha1($_POST['password'])
	));


	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Registrarse</title>
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
		<div class="registrarse">

        <div id="alert-signup" class="alert alert-danger alert-dismissable alert-signup">
          <!-- <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> -->
          <strong>Cuidado!</strong> Aún existen campos vacíos.
        </div>


				<form id="formsignup" class="form-signin" action="signup.php" method="post">
        <h2 class="form-signin-heading">Please sign up</h2>
        <input type="text" id="username" name="username" class="form-control" placeholder="Username">
        <input type="text" id="lastname" name="lastname" class="form-control" placeholder="Lastname">
        <input type="password" id="password" name="password" class="form-control" placeholder="Password" value="">
        <select class="form-control">
          <option>Elige una opción</option>
          <?php
            require_once '../config/db.php';
            $roles = Role::find('all');
            foreach($roles as $rol):
          ?>
        <option name="<?=$rol->roleid;?>"><?=$rol->rolename;?></option>
          <?php endforeach; ?>
        </select>
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> I agree the Terms and conditions
        </label>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Sign up</button>
      </form>

		</div>
	</div>

  <script type="text/javascript" src="../assets/js/jquery.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      //alert('Entrando...');
      $('#formsignup').submit(function(e){
        if ($('#username').val() == '' || $('#lastname').val() == '' || $('#password').val() == ''){
          //alert('Hay Campos vacios');
          $('#alert-signup').slideDown('slow').show();
          e.preventDefault();
        }
        else{
          return;
        }
      });

      $('input').click(function(e){
        $('#alert-signup').slideUp('slow', function(){
          $(this).hide();
        });
        e.preventDefault();
      });

    });
  </script>
    <script type="text/javascript" src="../assets/js/bootstrap.js"></script>

</body>
</html>
