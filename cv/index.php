<!DOCTYPE html>
<html lang="pt_br">
<head>
    <?php
        include_once('pages/header.php');
    ?>
                       
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
 integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
 
<body class="back-page">
<nav class="navbar navbar-default">
  <div class="container-fluid">

    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="curriculo.php"><i class="fa fa-sign-in-alt"></i> Meu Currículo</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<img src="img/bg.jpg" class="img-responsive"> 

<footer class="main-footer footer-landpage">
    <div class="pull-right hidden-xs">
            <div style="text-align: right">
            <strong>Curso de Análise e Desenvolvimento de Sistemas&nbsp;&nbsp;&nbsp;</strong>
            <br>
            <strong>Desenvolvido por: Danilo César&nbsp;&nbsp;&nbsp;</strong>
            </div>
    </div>
    <strong>
        &nbsp;&nbsp;&nbsp;Fatec Taubaté
    </strong>
    <br>
    &nbsp;&nbsp;&nbsp;&copy; <?php echo date('d/m/Y'); ?>. Todos os direitos reservados.
</footer>

    <?php
      include_once('pages/js.php');
    ?>
</body>
</html>