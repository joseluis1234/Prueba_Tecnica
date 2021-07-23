<!doctype html>
<html lang="en">

<head>
    <title>Registro Aspirantes</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container contenido-principal">
        <div class="row">
            <div class="d-flex">
                <div class="col-md-4 justify-content-center">
                    <aside class="bg-info aside-principal">
                        <h1 class="text-uppercase p-2 text-center text-light display-5">Registro de Aspirantes</h1>
                        <p class="text-light text-center">Administra a los nuevos Aspirantes</p>
                        <nav>
                            <a href="index.php" class="d-block text-light px-3 py-1">Aspirantes</a>
                            <a href="nuevo-aspirante.html" class="d-block text-light px-3 py-1 mt-2">Nuevo Aspirante</a>
                        </nav>
                    </aside>
                    <!--sidebar-->
                </div>
                <div class="col-md-8">
                    <main class="">
                        <h2 class="text-uppercase text-center mt-5">Aspirantes</h2>

                        <table class="table table-hover table-bordered text-center mt-4 text-center">
                            <thead>
                                <tr>
                                    <th class="text-center">Folio</th>
                                    <th class="text-center">Nombre</th>
                                    <th class="text-center">Apellido Paterno</th>
                                    <th class="text-center">Apellido Materno</th>
                                    <th class="text-center">Telefono</th>
                                    <th class="text-center">Experiencia</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                require("php/conexion.php");

                                //Imprime los valores de la BD
                                $conexion = mysqli_connect($servidor, $usuario, $password, $basededatos);
                                mysqli_select_db($conexion, 'registroaspirante');
                                $consulta = "SELECT * FROM aspirante";
                                $datos = mysqli_query($conexion, $consulta);

                                while ($fila = mysqli_fetch_array($datos)) {
                                    echo "<tr>";
                                    echo "<td>" . $fila['id'] . "</td><td>" . $fila['nombre'] . "</td><td>" . $fila['paterno'] . "</td><td>" . $fila['materno']
                                        . "</td><td>" . $fila['telefono'] . "</td><td>" . $fila['anios_experiencia'] . "</td><td>";
                                    echo "</tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </main>
                </div>
            </div>
        </div>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="js/app.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>