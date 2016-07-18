<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <!--<link href="../CSS/Bootstrap/css/bootstrap.css" rel="stylesheet">-->
    <link href="../../CSS/MaterializeCSS/css/materialize.css" rel="stylesheet">
    <link href="../../CSS/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body style="background-color: #f2f2f2">
<nav class="nav navbar-default teal darken-4">
    <div class="nav-wrapper">
        <a href="index.php" class="brand-logo">EasyExamen</a>
        <ul class="right hide-on-med-and-down">
            <li><a href="Presentación/cursos.php">Cursos</a></li>
        </ul>
    </div>
</nav>
<div class="jumbotron teal darken-3">
    <h1 class="center-align" style="color:white">Examenes</h1>
</div>
<main>
<div class="container">
    <div class="card" style="padding: 30px">
        <div class="card-content">
            <?php
            include '../Clases/clsConexion.php';
            $link = Conectar();

            $sqlquery = "SELECT nombre_curso,titulo_examen,id_examen FROM examen
                         JOIN curso on curso.id_curso = examen.id_curso";
            $resultset = mysqli_query($link,$sqlquery);

            ?>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <td>Curso</td>
                        <td>Examen</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($campo = $resultset->fetch_assoc()){ ?>
                        <tr>
                            <td><?php echo $campo['nombre_curso']?></td>
                            <td><?php echo $campo['titulo_examen']?></td>
                            <td>
                                <a href="PreviewExamen.php" class="btn-floating blue center-align"><i class="material-icons">assignment</i></a>
                                <a href="GestionarExamen.php" class="btn-floating green center-align"><i class="material-icons">edit</i></a>
                                <a href="clsGestionarExamen.php" class="btn-floating red right"><i class="material-icons">delete_forever</i></a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <button type="submit" class="btn-floating btn-large waves-effect teal accent-4 right"><i class="material-icons">done</i>
        </button>
    </div>
    </form>
</div>
</main>

<script href="../CSS/Bootstrap/js/bootstrap.min.js"></script>
<script href="../CSS/MaterializeCSS/js/materialize.js"></script>

<footer class="page-footer red darken-3" style="margin-bottom: 0px; border-bottom: 0px">
        <div class="container footer-copyright red darken-3">
            © 2016 Fernando Jiménez
        </div>
</footer>
</body>
</html>