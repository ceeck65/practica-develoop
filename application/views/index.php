<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width" />
	<title>Sistema Sanitaris</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
    <link rel="stylesheet" href="<?= base_url('lib/bootstrap/dist/css/bootstrap.css') ?>">
    <link rel="stylesheet" href="<?= base_url('lib/font-awesome/css/font-awesome.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/media.css') ?>">
</head>
<body>
<div class="container">

    <nav role="navigation" class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand visible-xs" href="#">Sistema Sanitarios</a>
            </div>
           <div id="navbarCollapse"  class="collapse navbar-collapse">
            <ul class="nav navbar-nav pull-left nav-menu">
                <li><a href="#">INICIO</a></li>
                <li class="separator visible-md visible-lg"></li>
                <li class="active"><a href="#">EMPRESAS</a></li>
                <li class="separator visible-md visible-lg"></li>
                <li><a href="#">SERVICIOS</a></li>
                <li class="separator visible-md visible-lg"></li>
                <li><a href="#">VALORA UN SERVCIO</a></li>
                <li class="separator visible-md visible-lg"></li>
                <li><a href="#">CONTACTO</a></li>
            </ul>
            <ul class="nav navbar-nav pull-right nav-login">
                   <li><a href="#">Registro</a></li>
                   <li class="sep"></li>
                   <li><a href="#">Iniciar sesión</a></li>
               </ul>
            </div>
        </div>
    </nav>

    <ol class="breadcrumb">
       <span>Estas en:</span>
        <li><a href="#">Inicio</a></li>
        <li><a href="#">Empresas</a></li>
        <li class="active">Registro de empresas</li>
    </ol>
    <div class="gradient"></div>
    <section>
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-6 enterprise">
                    <h1>REGISTRO DE EMPRESAS</h1>
                </div>
                <div class="col-md-6">
                    <button class="btn btn-primary save-enterprise pull-right">Guardar cambios</button>
                </div>
            </div>
            <hr style="width: 95%; color: #d2d2d2; height: 4px; margin-top: 20px !important;" />
            <div class="col-md-12">
                <button class="btn btn-primary">Guardar</button>
            </div>
        </div>
    </section>

    <!-- footer -->
    <div class="gradient"></div>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="col-md-3 footer">
                        <h3>Empresas</h3>
                        <ul>
                            <li>Consequat</li>
                            <li>Nunc tempor</li>
                            <li>Ante quis libero</li>
                            <li>Fermentum</li>
                        </ul>
                    </div>
                    <div class="col-md-3 footer">
                        <h3>Servicios</h3>
                        <ul>
                            <li>Consequat</li>
                            <li>Nunc tempor</li>
                            <li>Ante quis libero</li>
                            <li>Fermentum</li>
                        </ul>
                    </div>
                    <div class="col-md-3 footer">
                        <h3>Valora un servicio</h3>
                        <ul><li>Sed congue suscipit</li>
                            <li>Consequat Nunc</li>
                            <li>tempor  Ante</li>
                            <li>quis libero  F</li>
                            <li>Consequat</li>
                            <li>Nunc tempor</li>
                            <li>Ante quis libero</li>
                            <li>Fermentum</li>
                        </ul>
                    </div>
                    <div class="col-md-3 footer">
                        <h3>Contacto</h3>
                        <ul>
                            <li>Consequat</li>
                            <li>Nunc tempor</li>
                            <li>Ante quis libero</li>
                            <li>Fermentum</li>
                        </ul>
                    </div>
                    <div class="col-md-12 footer">
                       <p>
                           an inclined part of a road or railway; a slope.
                           fail-safe brakes for use on steep gradients
                           sinónimos: slope, incline, hill, rise, ramp, bank, declivity, grade
                           an increase or decrease in the magnitude of a property (e.g., temperature, pressure, or concentration) observed in passing from one point or moment to another.
                       </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- /footer -->
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


