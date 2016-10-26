<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sistema Sanitaris</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
    <link rel="stylesheet" href="<?= base_url('lib/bootstrap/dist/css/bootstrap.css') ?>">
    <link rel="stylesheet" href="<?= base_url('lib/font-awesome/css/font-awesome.css') ?>">
</head>
<body>
<div class="container">

    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <ul class="nav navbar-nav">
                <li><a href="#">INICIO</a></li>
                <li class="separator"></li>
                <li class="active"><a href="#">EMPRESAS</a></li>
                <li class="separator"></li>
                <li><a href="#">SERVICIOS</a></li>
                <li class="separator"></li>
                <li><a href="#">VALORA UN SERVCIO</a></li>
                <li class="separator"></li>
                <li><a href="#">CONTACTO</a></li>
            </ul>
            <ul class="nav navbar-nav pull-right nav-login">
                <li><a href="#">Registro</a></li>
                <li class="sep"></li>
                <li><a href="#">Iniciar sesión</a></li>
            </ul>
        </div>
    </nav>

    <ol class="breadcrumb">
       <span>Estas en:</span>
        <li><a href="#">Inicio</a></li>
        <li><a href="#">Empresas</a></li>
        <li class="active">Registro de empresas</li>
    </ol>






    <!-- Main component for a primary marketing message or call to action -->
    <div class="jumbotron">
        <h1>Navbar example</h1>
        <p>This example is a quick exercise to illustrate how the default, static navbar and fixed to top navbar work. It includes the responsive CSS and HTML, so it also adapts to your viewport and device.</p>
        <p>
            <a class="btn btn-lg btn-primary" href="../../components/#navbar" role="button">View navbar docs &raquo;</a>
        </p>
    </div>

</div> <!-- /container -->

 <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="<?= base_url('lib/bootstrap/dist/js/bootstrap.min.js') ?>"></script>
  </body>
</body>

</html>