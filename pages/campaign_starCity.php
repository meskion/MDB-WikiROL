<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>rol wiki</title>
    <!-- MDB icon -->
    <link rel="icon" href="../img/3gems.ico" type="image/x-icon">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="../css/mdb.min.css">
    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>


    <?php include '../phpFragments/header.php'; ?>


    <!--Contenedor principal-->
    <div class="container-fluid ">

        <div class="row ">
            <!-- Columna con la mayoria del contenido, con clase custom.
                 pasa a ocupar todo el ancho de la pagina en movil-->
            <div class="col-md-10 col-sm-12 offset-md-1 white textWrap">
                <h1>La ciudad Estrella</h1>
                <p>
                    La ciudad Estrella es un juego basado en la ciudad ficticia que le da nombre y en las tierras
                    colindantes. es un mundo abierto sin ninguna gran historia ni camino que seguir por los jugadores,
                    mi objetivo era crear una ambientación simple donde cualquier personaje pudiese encajar sin
                    dificultad, y dejar a los jugadores disfrutar de los personajes, criaturas, objetos legendarios y
                    pequeñas narrativas que he desperdigado por todos lados, en ningún orden en particular
                </p>
                <hr>
                <h3>La Ciudad</h3>
                <p>
                    El nucleo y principal lugar en el que se desenvuelve todo es en la Ciudad Estrellada:
                </p>
                <img class="img-fluid" src="../img/places/StarCityOver.jpg" alt="Ciudad Estrella">
                <p>
                    Una ciudad no muy grande, pero muy activa, con multiples zonas de interés, una amplia gama
                    de comerciantes con todo lo que un heroe pueda necesitar.
                </p>
                <hr>
                <h3>Taberna</h3>
                <p>
                    El único lugar donde viajeros que pasan por la ciudad pueden descansar y ahogar sus penas en
                    alcohol o tomar una buena comida. Punto de reunión para todo tipo de personajes. Operada por Julius,
                    un tabernero un poco gruñón pero inofensivo y que hace su trabajo eficientemente.
                </p>

                <table class="table table-striped table-inverse table-responsive">
                    <thead class="thead-inverse">
                        <tr>
                            <th>Servicio</th>
                            <th>Descripción</th>
                            <th>Precio</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="row">comida austera</td>
                            <td>te quita el hambre</td>
                            <td>0.25</td>
                        </tr>
                        <tr>
                            <td scope="row">Comida decente</td>
                            <td>Estofado Insignia de la taberna</td>
                            <td>0.5</td>
                        </tr>
                        <tr>
                            <td scope="row">Habitación</td>
                            <td>Para pasar la noche</td>
                            <td>0.5</td>
                        </tr>
                    </tbody>
                </table>

                <p>
                    Patrones Destacables de la taberna:
                <ul>
                    <li><em>Erin la Hechizera</em>, investigadora de objetos mágicos</li>
                    <li><em>Jasper el Bardo</em>, toca todas las noches, con un laud, increiblemente mal. Julius le
                        deja
                        tocar porque lo poco que gana se lo deja en cerveza, nunca se le ha visto hacer nada
                        sospechoso,
                        pero todo el mundo siente que esta asocidado con a saber que calaña de criminales.
                    </li>
                    <li><em>Marco el Cazarecompensas</em>, todas las noches vuelve a comer y descansar a la posada.
                        Taciturno,
                        de pocas palabras.</li>

                </ul>
                </p>
                <hr>
                <h3>Tienda de Monty</h3>
                <p>
                    La tienda de mercader Monty que acompañan los jugadores al principio, no suele estar abierta ya
                    que Monty suele viajar, pero mientras reposta y descansa abre la tienda y vende las baratijas que
                    le queden del viaje y útiles comunes. De vez en cuando puede que tenga algo interesante. Además
                    de Monty la tienda la lleva un guardia que suele vigilar los almacenes y la tienda mientras Monty
                    viaja.
                </p>
                <p>
                    En este viaje ha traido de vuelta:
                </p>
                <table class="table table-striped table-inverse table-responsive">
                    <thead class="thead-inverse">
                        <tr>
                            <th>EQUIPO</th>
                            <th>PESO</th>
                            <th>PRECIO</th>
                            <th>DAÑO</th>
                            <th>EFECTO</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="row">Escudo Sagrado</td>
                            <td>6</td>
                            <td>20</td>
                            <td>1D2</td>
                            <td>+15 EVA, +1 Armadura, +1 RM, +5 Daño contra seres del mal</td>
                        </tr>
                        <tr>
                            <td scope="row">Capa Fantasmal</td>
                            <td>2</td>
                            <td>15</td>
                            <td>-</td>
                            <td>Permite levitar hasta 10 m sobre el suelo, consume 1MANA
                                cada 2 turnos.</td>
                        </tr>
                        <tr>
                            <td scope="row">Hierba de Gato</td>
                            <td>1</td>
                            <td>0.5</td>
                            <td>-</td>
                            <td>curiosa hierba aromatica que encanta a todo tipo de felinos</td>
                        </tr>
                        <tr>
                            <td scope="row">Piedras Gemelas</td>
                            <td>1</td>
                            <td>15</td>
                            <td>-</td>
                            <td>Piedras misteriosas en forma cónica que siempre apuntan la
                                una a la otra</td>
                        </tr>
                        <tr>
                            <td scope="row">Vara de Magnus</td>
                            <td>2</td>
                            <td>30</td>
                            <td>1D2</td>
                            <td>+10 MANA máx. Cuenta como arma mágica.</td>
                        </tr>
                    </tbody>
                </table>
                <hr>
                <h3>Tienda de Armas</h3>
                <p>
                    Armas CaC de todo tipo, incluye las básicas de WoP, la tienda esta protegida por 3 guardias muy
                    bien equipados, las armas adicionales que vende son:
                </p>
                <table class="table table-striped table-inverse table-responsive">
                    <thead class="thead-inverse">
                        <tr>
                            <th>EQUIPO</th>
                            <th>PESO</th>
                            <th>PRECIO</th>
                            <th>DAÑO</th>
                            <th>EFECTO</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="row">Espada Asesina</td>
                            <td>2</td>
                            <td>7</td>
                            <td>1D8</td>
                            <td>+15 % Crítico, +10 IMP</td>
                        </tr>
                        <tr>
                            <td scope="row">Sable Oriental</td>
                            <td>3</td>
                            <td>6</td>
                            <td>1D12+1</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td scope="row">Garras de Tigre</td>
                            <td>1</td>
                            <td>7</td>
                            <td>-</td>
                            <td>+3 a daño con puños</td>
                        </tr>
                        <tr>
                            <td scope="row">Estoque Maestro</td>
                            <td>2</td>
                            <td>10</td>
                            <td>2D6</td>
                            <td>Tiradas de 6 en dado se convierten en 10</td>
                        </tr>
                        <tr>
                            <td scope="row">Gran Martillo</td>
                            <td>12</td>
                            <td>10</td>
                            <td>1D20</td>
                            <td>Ignora Armadura</td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>




        <?php include '../phpFragments/footer.php'; ?>
        <!-- Grid row-->


    </div>
    <!-- End your project here-->

    <!-- jQuery -->
    <script type="text/javascript" src="../js/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="../js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="../js/mdb.min.js"></script>
    <!-- Your custom scripts (optional) -->
    <script type="text/javascript"></script>
</body>

</html>