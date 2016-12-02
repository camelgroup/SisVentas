@extends ('layouts.admin')
@section ('contenido')
        <!doctype html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
    <link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
    <script src="js/modernizr.js"></script> <!-- Modernizr -->
</head>
<body>
<header>
    <h1>CAMEL GROUP</h1>
</header>
<section class="cd-faq">
    <div class="cd-faq-items">
        <ul id="Integrantes" class="cd-faq-group">
            <li class="cd-faq-title"><h2>Integrantes</h2></li>

            <div class="cd-faq-content">
                <p>Alejandro Cabrera Molloja </p>
                <p>Luis Daniel Lopez </p>
                <p>Carolina Terriva </p>
                <p>Edson Lazo</p>
                <p>Marco Mendoza</p>
            </div>
        </ul> <!-- cd-faq-group -->
    </div> <!-- cd-faq-items -->
    <div class="cd-faq-items">
        <ul id="Repositorio" class="cd-faq-group">
            <li class="cd-faq-title"><h2>Repositorio Github</h2></li>
            <a href="https://github.com/camelgroup/SisVentas">SisVentas by Camel</a>
        </ul> <!-- cd-faq-group -->
    </div> <!-- cd-faq-items -->
    <div class="cd-faq-items">
        <ul id="SCRUM" class="cd-faq-group">
            <li class="cd-faq-title"><h2>SCRUM</h2></li>
            <a href="https://app.scrumdo.com/projects/sisventas/board#/view">Scrum by Camel</a>
        </ul> <!-- cd-faq-group -->
    </div>
</section>
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/jquery.mobile.custom.min.js"></script>
    <script src="js/main.js"></script> <!-- Resource jQuery -->
</body>
</html>
@endsection