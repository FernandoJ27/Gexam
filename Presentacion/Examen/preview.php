<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <!--<link href="../CSS/Bootstrap/css/bootstrap.css" rel="stylesheet">-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="../../CSS/MaterializeCSS/css/materialize.css" rel="stylesheet" type="text/css" media="screen,projection">
    <link href="../../CSS/style.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <!--JQuery min -->
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
</head>
<body style="background-color: #f2f2f2">
<div class="navbar-fixed">
    <nav class="darkblue-upt">
    <div class="nav-wrapper">
            <a href="../../index.php" class="brand-logo">EasyExamen</a>
            <ul class="right hide-on-med-and-down">
                <li><a href="preview.php">Cursos</a></li>
            </ul>
        </div>
    </nav>
</div>
<main>
    <div class="container">
        <div class="card">
                <div class="jumbotron blue-upt">
                    <h1 class="center-align white-text"><?php ?></h1>
                </div>
            <div class="card-content" style="padding: 30px;">
                <?php
                include '../../Clases/clsConexion.php';
                $link = Conectar();

                $sqlquery = "SELECT nombre_curso,titulo_examen,id_examen FROM examen
                         JOIN curso on curso.id_curso = examen.id_curso";
                $resultset = mysqli_query($link, $sqlquery);

                ?>
                <table class="highlight centered">
                    <thead>
                    <tr>
                        <th>Curso</th>
                        <th>Examen</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    while ($campo = $resultset->fetch_assoc()) { ?>
                        <tr class="show-fab-on-hover">
                            <td><?php echo $campo['nombre_curso'] ?></td>
                            <td><?php echo $campo['titulo_examen'] ?></td>
                            <td>
                                <a href="PreviewExamen.php" style="color: aliceblue;" id="assignment"><i class="material-icons">assignment</i></a>
                                <a href="../Curso/gestionar.php?examen=<?php echo $campo['id_examen'] ?>" id="edit" style="color: aliceblue;"><i class="material-icons">edit</i></a>
                                <a href="../../Clases/Examen/clsgestionar.php" class="right" style="color: aliceblue;" id="delete"><i class="material-icons">delete_forever</i></a>
                            </td>
                        </tr>
                        <tr class="show-fab-on-hover">
                            <td><?php echo $campo['nombre_curso'] ?></td>
                            <td><?php echo $campo['titulo_examen'] ?></td>
                            <td>
                                <a href="PreviewExamen.php" style="color: aliceblue;" id="assignment"><i class="material-icons">assignment</i></a>
                                <a href="../Curso/gestionar.php?examen=<?php echo $campo['id_examen'] ?>" id="edit" style="color: aliceblue;"><i class="material-icons">edit</i></a>
                                <a href="../../Clases/Examen/clsgestionar.php" class="right" style="color: aliceblue;" id="delete"><i class="material-icons">delete_forever</i></a>
                            </td>
                        </tr>
                        <tr class="show-fab-on-hover">
                            <td><?php echo $campo['nombre_curso'] ?></td>
                            <td><?php echo $campo['titulo_examen'] ?></td>
                            <td>
                                <a href="PreviewExamen.php" style="color: aliceblue;" id="assignment"><i class="material-icons">assignment</i></a>
                                <a href="../Curso/gestionar.php?examen=<?php echo $campo['id_examen'] ?>" id="edit" style="color: aliceblue;"><i class="material-icons">edit</i></a>
                                <a href="../../Clases/Examen/clsgestionar.php" class="right" style="color: aliceblue;" id="delete"><i class="material-icons">delete_forever</i></a>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
        </form>
    </div>
    <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
        <a class="btn-floating btn-large btn-floating-hover-hide">
            <i class="large material-icons">add</i>
        </a>
        <ul>
            <li><a class="btn-floating btn-large red"><i class="material-icons">insert_chart</i></a></li>
            <li><a class="btn-floating btn-large blue-grey"><i class="material-icons">format_quote</i></a></li>
        </ul>
    </div>
</main>

<!--<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>-->
<script src="../../CSS/MaterializeCSS/js/materialize.min.js" type="text/javascript"></script>

<!--<footer class="page-footer red darken-3">-->
<footer class="page-footer" style="background-color: #0A245F">
    <!--<div class="container footer-copyright red darken-3">-->
    <div class="container footer-copyright" style="background-color: #0A245F">
        © 2016 Fernando Jiménez
    </div>

</body>
</html>