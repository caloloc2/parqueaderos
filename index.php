<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Parqueaderos</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <h1>Sistema de Parqueadero</h1>
    <ul id="parqueos">
        <li class="puesto" id="puesto1">
            <p>Puesto 1</p>
            <figure class="carro"><img src="img/carro.png" alt=""></figure>
        </li>

        <li class="puesto" id="puesto2">
            <p>Puesto 2</p>
            <figure class="carro"><img src="img/carro.png" alt=""></figure>
        </li>

        <li class="puesto " id="puesto3">
            <p>Puesto 3</p>
            <figure class="carro"><img src="img/carro.png" alt=""></figure>
        </li>

        <li class="puesto" id="puesto4">
            <p>Puesto 4</p>
            <figure class="carro"><img src="img/carro.png" alt=""></figure>
        </li>

        <li class="puesto " id="puesto5">
            <p>Puesto 5</p>
            <figure class="carro"><img src="img/carro.png" alt=""></figure>
        </li>
    </ul>

    <p>LIBRES: <span id="libres">5</span></p>
    <p>OCUPADOS: <span id="ocupados">0</span></p>

    <script src="js/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>