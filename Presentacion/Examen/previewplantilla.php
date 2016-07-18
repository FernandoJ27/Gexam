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
                <li><a href="previewplantilla.php">Cursos</a></li>
            </ul>
        </div>
    </nav>
</div>
<main>
    <div class="container">
        <div class="card">
        <!-- InstanceBeginEditable name="EditRegion3" -->EditRegion3<!-- InstanceEndEditable -->        
      </div>
    </div>
    <div class="fixed-action-btn hide-on-med-and-down" style="bottom: 5%; right: 10%;"><!--LARGE SCREENS-->
      <!-- InstanceBeginEditable name="EditRegion1" -->EditRegion1<!-- InstanceEndEditable -->
    </div>
    <div class="fixed-action-btn hide-on-large-only" style="bottom: 7%; right: 1%;"><!--SMALL SCREENS-->
      <!-- InstanceBeginEditable name="EditRegion2" -->EditRegion2<!-- InstanceEndEditable -->
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