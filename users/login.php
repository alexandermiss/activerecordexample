<?php


	if($_POST['submit']){

   require_once '../config/db.php';

	#$user_login = User::find_by_sql('SELECT username, password FROM login WHERE username = ? AND password = ?', array($_POST['username'], $_POST['password']));
    
    $user_login = User::find('first', array('conditions'=>array('username = ? AND password = ?', $_POST['username'], $_POST['password'])));
        
    

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
        <div>
           <h1><?php echo $user_login->username; ?></h1>
	       <h2><?php echo $user_login->password; ?></h2>
        </div>
		<div class="registrarse">
			<div class="form">
				
				<form class="form-signin" action="login.php" method="post">
        <h2 class="form-signin-heading">Please sign in</h2>
        <input type="text" name="username" class="form-control" placeholder="Username" required autofocus>
        <input type="password" name="password" class="form-control" placeholder="Password" required>
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> Remember me
        </label>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Sign in</button>
      </form>

			</div>
		</div>
	</div>

  <script type="text/javascript" src="../assets/js/jquery.js"></script>
    <script type="text/javascript" src="../assets/js/bootstrap.js"></script>

</body>
</html>
