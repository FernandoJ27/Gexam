<!doctype html>
<html lang="en"><!-- InstanceBegin template="/Templates/previewplantilla.dwt.php" codeOutsideHTMLIsLocked="false" -->
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
<div class="navbar-fixed">
    <nav class="darkblue-upt">
    <div class="nav-wrapper">
            <a href="../../index.php" class="brand-logo">EasyExamen</a>
            <ul class="right hide-on-med-and-down">
                <li><a href="../../Presentacion/Curso/listar.php">Cursos</a></li>
            </ul>
        </div>
    </nav>
</div>
<main>
    <div class="container">
        <div class="card">
        <!-- InstanceBeginEditable name="EditRegion3" -->
            <?php
            if (isset($_GET['id'])){
                if (!empty($_GET['id'])){
                    include "../../Clases/clsConexion.php";
                    $link = Conectar();
                    $idexamen = $_GET['id'];

                    $sqlquery = "SELECT id_pregunta, id_examen, pregunta FROM pregunta
                                 WHERE id_examen = $idexamen
                                 ORDER BY fecha_creacion ASC";
                    $resultset = mysqli_query($link,$sqlquery);
                    ?>
                    <div class="jumbotron blue-upt">
                        <h1 class="center-align white-text"><?php if (isset($_GET['examen'])){echo $_GET['examen'];}else{echo 'Evaluación';}?></h1>
                    </div>

                    <div class="card-content" style="padding: 30px;">

                        <form action="../../Clases/Pregunta/clsgestionar.php?accion=Nuevo&idexamen=<?php echo $idexamen?>&titulo=<?php echo $_GET['examen']?>" method="post">
                            <div class="row">
                                <div class="input-field col s10">
                                    <input type="text" id="pregunta" name="pregunta" required>
                                    <label for="pregunta">Pregunta</label>
                                </div>
                                <div class="col s2" style="padding-top: 20px">
                                    <button type="submit" class="btn-floating blue tooltipped"
                                       data-position="left" data-delay="1500" data-tooltip="Guardar" id="guardar">
                                        <img src="../../Icons/done.png" class="icono-sm-upt"></button>
                                </div>
                            </div>
                        </form>

                        <table class="highlight centered">
                            <tbody>
                            <?php
                            while ($campo = $resultset->fetch_assoc()) { ?>
                                <tr>
                                    <td>
                                        <div class="row">
                                            <div class="col s5 left-align">
                                                <p><?php echo $campo['pregunta']?></p>
                                            </div>
                                            <div class="col s1 offset-s4">
                                                <button class="btn-floating green tooltipped" href="gestionarpregunta.php"
                                                        data-position="left" data-delay="1500" data-tooltip="Editar" id="Editar">
                                                    <img src="../../Icons/edit.png" class="icono-sm-upt"></button>
                                            </div>
                                        </div>

                                    </td>
                                </tr>
                                <?php
                            }
                            ?>
                            </tbody>
                        </table>
                    </div><?php
                }else{
                    echo "El ID no posee datos";
                }
            }else{
                echo "No hay ID";
            }
            ?>

        <!-- InstanceEndEditable -->
      </div>
    </div>
    <div class="fixed-action-btn hide-on-med-and-down" style="bottom: 5%; right: 10%;"><!--LARGE SCREENS-->
      <!-- InstanceBeginEditable name="EditRegion1" -->
        <a class="btn-floating btn-large btn-floating-hover-hide yellow-upt">
            <img src="../../Icons/settings.png" class="icono-lg-upt">
        </a>
        <ul>
            <li><a class="btn-floating btn-large green" onclick="javascript:history.back()">
                    <img src="../../Icons/done.png" class="icono-lg-upt"></a>
            </li>
            <li><a class="btn-floating btn-large teal" href="preview.php?">
                    <img src="../../Icons/preview.png" class="icono-lg-upt"></a>
            </li>
        </ul>
      <!-- InstanceEndEditable -->
    </div>
    <div class="fixed-action-btn hide-on-large-only" style="bottom: 7%; right: 1%;"><!--SMALL SCREENS-->
      <!-- InstanceBeginEditable name="EditRegion2" -->

      <!-- InstanceEndEditable -->
  	</div>
</main>

<script src="../../CSS/JQuery/jquery-3.0.0.min.js"></script>
    <script>
        $(document).ready(function(){
            $("tr.show-fab-on-hover").mouseenter(function(){
                $(this).find('a').addClass('btn-floating');
                $(this).find('#assignment').addClass('blue');
                $(this).find('#assignment').addClass('center-align');
                $(this).find('#edit').addClass('green');
                $(this).find('#assignment').addClass('center-align');
                $(this).find('#delete').addClass('red');
                $(this).find('#delete').addClass('right');
            });
            $("tr.show-fab-on-hover").mouseleave(function(){
                $(this).find('a').removeClass();
                $(this).find('#delete').addClass('right');
            });

        });
    </script>
<script src="../../CSS/MaterializeCSS/js/materialize.min.js" type="text/javascript"></script>

<!--<footer class="page-footer red darken-3">-->
<footer class="page-footer" style="background-color: #0A245F">
    <div class="container footer-copyright" style="background-color: #0A245F">
        © 2016 Fernando Jiménez
    </div>
</footer>
</body>
<!-- InstanceEnd --></html>