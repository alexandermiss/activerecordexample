<?php

	

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

	<?php
		if(isset($_GET['userid'])){
			require_once '../config/db.php';
			$user = User::find($_GET['userid']);
	?>
		<div class="registrarse">

				<form id="formupdate" class="form-signin" action="user_submit.php" method="post">
        <h2 class="form-signin-heading">Updating user</h2>
        <input type="text" id="userid" name="userid" class="form-control" placeholder="Id" value="<?php echo $user->userid; ?>" readonly="readonly">
        <input type="text" id="username" name="username" class="form-control" placeholder="Username" value="<?php echo $user->username; ?>" required>
        <input type="text" id="lastname" name="lastname" class="form-control" placeholder="Lastname" value="<?php echo $user->lastname; ?>" required>
        <input type="password" id="password" name="password" class="form-control" placeholder="Password" value="">
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> I agree the Terms and conditions
        </label>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Update</button>
      </form>

		</div>
	<?php }else{ ?>
		<div class="row">
			<p class="text-center"> El usuario no existe. </p>
		</div>
	</div>
	<?php } ?>

  <script type="text/javascript" src="../assets/js/jquery.js"></script>
  <script type="text/javascript">
		$(document).ready(function(){
			//alert('Entrando...');
			$('#formupdate').submit(function(e){
				if ($('#username').val() == '' || $('#lastname').val() == '' || $('#password').val() == ''){
					alert('Hay Campos vacios');
					//$('#alert-signup').removeClass('.alert-signup');
					e.preventDefault();
				}
				else{
					return;
				}
			});
		});
	</script>
    <script type="text/javascript" src="../assets/js/bootstrap.js"></script>

</body>
</html>
