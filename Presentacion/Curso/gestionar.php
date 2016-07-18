<!doctype html>
<html lang="en"><!-- InstanceBegin template="/Templates/gestionarplantilla.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
    <meta charset="UTF-8">
    <!-- InstanceBeginEditable name="doctitle" -->
    <title>Gexam</title>
    <!-- InstanceEndEditable -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="../../CSS/MaterializeCSS/css/materialize.css" rel="stylesheet" type="text/css" media="screen,projection">
    <link href="../../CSS/style.css" rel="stylesheet">
    <link href="../../CSS/animate.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!-- InstanceBeginEditable name="head" -->
    <!-- InstanceEndEditable -->
</head>
<body style="background-color: #f2f2f2">
<div class="navbar-fixed" style="margin-bottom: 5%;">
    <nav class="darkblue-upt">
       <div class="nav-wrapper">
            <a href="../../index.php" class="brand-logo">EasyExamen</a>
            <ul class="right hide-on-med-and-down">
                <li><a href="listar.php" class="animated fadeIn">Cursos</a></li>
            </ul>
        </div>
        <div class="jumbotron-fixed shadow blue-upt">
            <h3 class="center-align hide-on-med-and-down" style="color:white">
                <!-- InstanceBeginEditable name="EditRegion4" --><?php if (isset($_GET['curso'])){echo $_GET['curso'];}else echo 'Nuevo Curso';?><!-- InstanceEndEditable -->
            </h3>
            <h3 class="center-align hide-on-large-only" style="color:white; font-size:20px">
                <!-- InstanceBeginEditable name="EditRegion5" --><?php if (isset($_GET['curso'])){echo $_GET['curso'];}else echo 'Nuevo Curso';?><!-- InstanceEndEditable -->
            </h3>
        </div>
    </nav>
</div> 
<main>
    <div class="container">
        <div class="card" style="padding: 30px">
            <!-- InstanceBeginEditable name="listar" -->
            <div class="card-content" style="top: 30%">
                <?php
                if (isset($_GET['id'])){
                    if (!empty($_GET['id'])) {
                        include "../../Clases/clsConexion.php";
                        $link = Conectar();
                        $idcurso = $_GET['id'];

                        $sqlquery = "SELECT nombre_curso FROM curso WHERE id_curso = $idcurso";
                        $resultset = mysqli_query($link,$sqlquery);
                        $campo = $resultset->fetch_assoc();
                        ?>
                        <form action="../../Clases/Curso/clsgestionar.php?accion=Modificar&id=<?php echo $idcurso?>" method="post" >
                            <div class="row">
                                <div class="col s12 input-field">
                                    <input id="nombre" name="nombre" type="text" value="<?php echo $campo['nombre_curso']?>">
                                    <label for="nombre">Nombre Curso</label>
                                </div>
                            </div>
                            <button type="submit" class="btn-floating btn-large blue right" style="top: 20px;">
                                <img src="../../Icons/done.png" class="icono-lg-upt"></button>
                            <a class="btn-floating btn-large red right" style="top: 20px; right: 10px" onclick="javascript:history.back()">
                                <img src="../../Icons/cancel.png" class="icono-lg-upt"></a>
                        </form><?php
                    }
                }else{ ?>
                    <form action="../../Clases/Curso/clsgestionar.php?accion=Nuevo" method="post">
                        <div class="row">
                            <div class="col s12 input-field">
                                <input id="nombre" name="nombre" type="text" required>
                                <label for="nombre">Nombre Curso</label>
                            </div>
                        </div>
                        <button type="submit" class="btn-floating btn-large green right" style="top: 20px;">
                            <img src="../../Icons/done.png" class="icono-lg-upt"></button>
                        <a class="btn-floating btn-large red right" style="top: 20px; right: 10px" onclick="javascript:history.back()">
                            <img src="../../Icons/cancel.png" class="icono-lg-upt"></a>
                    </form><?php
                }
                ?>
            </div>
            <!-- InstanceEndEditable -->
        </div>
        <!-- InstanceBeginEditable name="FABs" -->
        <!-- InstanceEndEditable -->
    </div>
    <div class="fixed-action-btn hide-on-med-and-down" style="bottom: 5%; right: 10%;"><!--LARGE SCREENS-->
      <!-- InstanceBeginEditable name="EditRegion1" --><!-- InstanceEndEditable -->
    </div>
    <div class="fixed-action-btn hide-on-large-only" style="bottom: 7%; right: 1%;"><!--SMALL SCREENS-->
      <!-- InstanceBeginEditable name="EditRegion2" --><!-- InstanceEndEditable -->
  	</div>
</main>
<script src="../../CSS/JQuery/jquery-3.0.0.min.js"></script>
<script>
	$(document).ready(function(){
		$("tr.show-fab-on-hover").mouseenter(function(){
			$(this).find('.btn-floating').css('visibility','initial');
			$(this).find('.btn-floating').removeClass('zoomOut');
			$(this).find('.btn-floating').addClass('center-align');
			$(this).find('.btn-floating').addClass('animated');
			$(this).find('.btn-floating').addClass('bounceIn');
		});
		$("tr.show-fab-on-hover").mouseleave(function(){
			$(this).find('.btn-floating').removeClass('zoomIn');
			$(this).find('.btn-floating').removeClass('bounceIn');
			$(this).find('.btn-floating').addClass('zoomOut');
			$(this).find('a').css('visibility','hidden');
		});
	
	});
</script>
<script src="../../CSS/MaterializeCSS/js/materialize.min.js" type="text/javascript"></script>

<footer class="page-footer" style="background-color: #0A245F">
    <div class="container footer-copyright" style="background-color: #0A245F">
        © 2016 Fernando Jiménez
    </div>
</footer>
</body>
<!-- InstanceEnd --></html>