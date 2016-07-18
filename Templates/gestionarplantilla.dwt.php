<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- TemplateBeginEditable name="doctitle" -->
    <title>Gexam</title>
    <!-- TemplateEndEditable -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="../CSS/MaterializeCSS/css/materialize.css" rel="stylesheet" type="text/css" media="screen,projection">
    <link href="../CSS/style.css" rel="stylesheet">
    <link href="../CSS/animate.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!-- TemplateBeginEditable name="head" -->
    <!-- TemplateEndEditable -->
</head>
<body style="background-color: #f2f2f2">
<div class="navbar-fixed" style="margin-bottom: 5%;">
    <nav class="darkblue-upt">
       <div class="nav-wrapper">
            <a href="../index.php" class="brand-logo">EasyExamen</a>
            <ul class="right hide-on-med-and-down">
                <li><a href="../Presentacion/Curso/listar.php" class="animated fadeIn">Cursos</a></li>
            </ul>
        </div>
        <div class="jumbotron-fixed shadow blue-upt">
            <h3 class="center-align hide-on-med-and-down" style="color:white">
                <!-- TemplateBeginEditable name="EditRegion4" -->EditRegion4<!-- TemplateEndEditable -->
            </h3>
            <h3 class="center-align hide-on-large-only" style="color:white; font-size:20px">
                <!-- TemplateBeginEditable name="EditRegion5" -->EditRegion5<!-- TemplateEndEditable -->
            </h3>
        </div>
    </nav>
</div> 
<main>
    <div class="container">
        <div class="card" style="padding: 30px">
            <!-- TemplateBeginEditable name="listar" -->EditRegion3<!-- TemplateEndEditable -->
        </div>
        <!-- TemplateBeginEditable name="FABs" -->EditRegion6<!-- TemplateEndEditable -->
    </div>
    <div class="fixed-action-btn hide-on-med-and-down" style="bottom: 5%; right: 10%;"><!--LARGE SCREENS-->
      <!-- TemplateBeginEditable name="EditRegion1" -->EditRegion1<!-- TemplateEndEditable -->
    </div>
    <div class="fixed-action-btn hide-on-large-only" style="bottom: 7%; right: 1%;"><!--SMALL SCREENS-->
      <!-- TemplateBeginEditable name="EditRegion2" -->EditRegion2<!-- TemplateEndEditable -->
  	</div>
</main>
<script src="../CSS/JQuery/jquery-3.0.0.min.js"></script>
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
<script src="../CSS/MaterializeCSS/js/materialize.min.js" type="text/javascript"></script>

<footer class="page-footer" style="background-color: #0A245F">
    <div class="container footer-copyright" style="background-color: #0A245F">
        © 2016 Fernando Jiménez
    </div>
</footer>
</body>
</html>