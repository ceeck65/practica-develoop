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

    <?php echo $this->insert('layouts/menu'); ?>

    <?php echo $this->insert('layouts/breadcrumb'); ?>
    
    <div class="gradient"></div>
    <section>
        <?php echo $this->section('page'); ?>
    </section>

    <!-- footer -->
    <div class="gradient"></div>
    <footer>
        <?php echo $this->insert('layouts/footer'); ?>
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


