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
                <li><a href="../Curso/listar.php" class="animated fadeIn">Cursos</a></li>
            </ul>
        </div>
        <div class="jumbotron-fixed shadow blue-upt">
            <h3 class="center-align hide-on-med-and-down" style="color:white">
                <!-- InstanceBeginEditable name="EditRegion4" -->Evaluaciones<!-- InstanceEndEditable -->
            </h3>
            <h3 class="center-align hide-on-large-only" style="color:white; font-size:20px">
                <!-- InstanceBeginEditable name="EditRegion5" -->Evaluaciones<!-- InstanceEndEditable -->
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

                        $sqlquery = "SELECT id_examen,titulo_examen FROM examen
                                     WHERE id_curso = $idcurso";
                        $resultset = mysqli_query($link,$sqlquery);
                        ?>
                        <h5><?php if (isset($_GET['curso'])){echo $_GET['curso'];}?></h5><br>
                        <table class="highlight centered">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Evaluación</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            while ($campo = $resultset->fetch_assoc()) { ?>
                                <tr class="show-fab-on-hover">
                                    <td><?php echo $campo['id_examen'] ?></td>
                                    <td><?php echo $campo['titulo_examen'] ?></td>
                                    <td>
                                        <a href="preview.php" class="btn-floating teal tooltipped"
                                           data-position="left" data-delay="1500" data-tooltip="Preview" style="visibility: hidden" id="preview">
                                           <img src="../../Icons/preview.png" class="icono-sm-upt"></a>
                                        <a href="preguntasplantilla.php?id=<?php echo $campo['id_examen']?>&examen=<?php echo $campo['titulo_examen']?>"
                                           class="btn-floating blue tooltipped" style="visibility: hidden" id="assignment"
                                           data-position="left" data-delay="1500" data-tooltip="Preguntas">
                                           <img src="../../Icons/assignment.png" class="icono-sm-upt"></a>
                                        <a href="gestionar.php?examen=<?php echo $campo['id_examen'] ?>" class="btn-floating green tooltipped" style="visibility: hidden" id="edit"
                                           data-position="left" data-delay="1500" data-tooltip="Editar">
                                           <img src="../../Icons/edit.png" class="icono-sm-upt"></a>
                                        <a href="../../Clases/Examen/clsgestionar.php" class="btn-floating red right tooltipped" style="visibility: hidden" id="delete"
                                           data-position="left" data-delay="1500" data-tooltip="Eliminar">
                                           <img src="../../Icons/delete.png" class="icono-sm-upt"></a>
                                    </td>
                                </tr>
                                <?php
                            }
                            ?>
                            </tbody>
                        </table>
                        <?php
                    }else{
                        echo '<h3 class="animated bounce infinite">Debe escoger un curso.</h3>';
                    }
                }else{ ?>
                    <h3 class="animated bounce infinite">Debe escoger un curso.</h3><?php
                }
                ?>

            </div>
            <!-- InstanceEndEditable -->
        </div>
        <!-- InstanceBeginEditable name="FABs" --><!-- InstanceEndEditable -->
    </div>
    <div class="fixed-action-btn hide-on-med-and-down" style="bottom: 5%; right: 10%;"><!--LARGE SCREENS-->
      <!-- InstanceBeginEditable name="EditRegion1" -->
        <a class="btn-floating btn-large btn-floating-hover-hide yellow-upt">
            <img src="../../Icons/settings.png" class="icono-lg-upt">
        </a>
        <ul>
            <li><a class="btn-floating btn-large blue-grey" onclick="javascript:history.back()"><img src="../../Icons/back.png" class="icono-lg-upt"></a></li>
            <li><a class="btn-floating btn-large pink accent-3" href="gestionar.php"><img src="../../Icons/add.png" class="icono-lg-upt"></a></li>
        </ul>
      <!-- InstanceEndEditable -->
    </div>
    <div class="fixed-action-btn hide-on-large-only" style="bottom: 7%; right: 1%;"><!--SMALL SCREENS-->
      <!-- InstanceBeginEditable name="EditRegion2" -->
        <a class="btn-floating btn-large btn-floating-hover-hide yellow-upt">
            <img src="../../Icons/settings.png" class="icono-lg-upt">
        </a>
        <ul>
            <li><a class="btn-floating btn-large blue-grey" onclick="javascript:history.back()"><img src="../../Icons/back.png" class="icono-lg-upt"></a></li>
            <li><a class="btn-floating btn-large pink accent-3" href="gestionar.php"><img src="../../Icons/add.png" class="icono-lg-upt"></a></li>
        </ul>
      <!-- InstanceEndEditable -->
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