<?php
include ('system/conf.php');
include 'libs/changelog.class.php';
include 'libs/auth.class.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Nashira Blog</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="static/css/bootstrap.min.css" rel="stylesheet" media="screen">
  </head>
  <body>
  <div class="navbar">
  <div class="navbar-inner">
    <a class="brand" href="#">Catk's</a>
    <ul class="nav">
      <li class="active"><a href="/changelog/changelog">Home</a></li>
	  <li><a href="/changelog/login">Login</a></li>
    </ul>
	              <div class="pull-right">
                <ul class="nav pull-right">
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Welcome, <?php echo $_SESSION['login']?> <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="/changelog/add-more"><i class="icon-cog"></i> Update Changelog</a></li>
                            <li class="divider"></li>
                            <li><a href="/auth/logout"><i class="icon-off"></i> Logout</a></li>
                        </ul>
                    </li>
                </ul>
              </div>
  </div>
</div>
    <div class="page-header">
  <h1>Equality-Network<small>Devblog</small></h1>
</div>
	<br>
	<br>