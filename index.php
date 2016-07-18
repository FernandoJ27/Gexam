<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href="CSS/Bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="CSS/MaterializeCSS/css/materialize.css" rel="stylesheet">
    <link href="CSS/style.css" rel="stylesheet">
    <link href="CSS/animate.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body style="background-color: #f2f2f2">
<nav class="nav navbar-default teal darken-4">
    <div class="nav-wrapper">
        <a href="index.php" class="brand-logo">EasyExamen</a>
        <ul class="right hide-on-med-and-down">
            <li><a href="Presentacion/cursos.php">Cursos</a></li>
        </ul>
    </div>
</nav>
<div class="jumbotron teal darken-3">
    <h1 class="text-center" style="color:white">Welcome</h1>
</div>
<main>
<div class="container">
    <form method="post" action="Clases/clsAgregarpregunta.php">
        <div class="card" style="padding: 30px">
            <div class="card-title">
                <h1>Preguntas</h1>
            </div>
            <div class="card-content">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A architecto doloremque, facilis hic illo
                    nobis
                    officia,
                    perspiciatis praesentium quam quas qui voluptate voluptates? Ab eveniet magni nam nostrum optio
                    temporibus voluptate?
                    A ab alias aliquam, aliquid, beatae consectetur dicta ea eos eveniet harum, illo illum ipsa ipsum
                    iste
                    itaque iusto
                    laboriosam laudantium maiores minima nam nihil non nostrum officia porro quo tenetur totam velit?
                    Aliquam aliquid
                    architecto culpa cum deleniti dicta fuga illo inventore laborum, laudantium maiores necessitatibus
                    neque
                    non pariatur
                    provident rem sunt tempore totam velit veritatis? Aliquam debitis delectus eum harum impedit libero
                    minus perspiciatis
                    , rerum saepe tempora.
                </p>
            </div>
            <button type="submit" class="btn-floating btn-large waves-effect blue accent-4 right"><i class="material-icons">done</i></button>
        </div>
    </form>
    <?php
    include 'Clases/clsConexion.php';
    $link = Conectar();
    Conectar();
    $sqlquery = "SELECT * FROM p";
    ?>
</div>
</main>

<script href="Bootstrap/js/bootstrap.min.js"></script>
<script href="MaterializeCSS/js/materialize.js"></script>

<footer class="page-footer red darken-3" style="margin-bottom: 0px; border-bottom: 0px">
        <div class="container footer-copyright red darken-3">
            © 2016 Fernando Jiménez
        </div>
</footer>
</body>
</html>