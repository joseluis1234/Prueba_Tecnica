<?php
require('conexion.php');

//Recibe los datos y los guarda en variables
$nombre = $_POST["nombre"];
$paterno = $_POST["paterno"];
$materno = $_POST["materno"];
$telefono = $_POST["telefono"];
$experiencia = $_POST["experiencia"];


//Consulta para insertar en la BD
$instruccion_SQL = "INSERT INTO aspirante (nombre, paterno, materno, telefono,anios_experiencia)
                               VALUES ('$nombre','$paterno','$materno','$telefono','$experiencia')";

$resultado = mysqli_query($conexion, $instruccion_SQL);

if (!$resultado) {
    echo 'Error al registrarse';
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmacion</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <div class="container registro-exitoso">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-5 border-dark">
                    <div class="card-body">
                        <div class="card-title">
                            <h3 class="text-center display-4">Registro correcto</h3>
                        </div>
                        <div class="card-text text-center">
                            <p class="lead">Folio: <span>
                                    <?php
                                    require('conexion.php');
                                    //Consulta para obtener el registro deseado
                                    $consulta = "SELECT id FROM aspirante WHERE nombre = '$nombre'";
                                    $datos = mysqli_query($conexion, $consulta);
                                    if (mysqli_num_rows($datos) > 0) {
                                        while ($row = mysqli_fetch_array($datos)) {
                                            echo $row["id"];
                                        }
                                    }
                                    ?>
                                </span></p>
                            <p class="lead">Aspirante: <span>
                                    <?php
                                    require('conexion.php');
                                    //Consulta para obtener el registro deseado
                                    $consulta = "SELECT nombre,paterno,materno FROM aspirante WHERE nombre = '$nombre'";
                                    $datos = mysqli_query($conexion, $consulta);
                                    if (mysqli_num_rows($datos) > 0) {
                                        while ($row = mysqli_fetch_array($datos)) {
                                            echo $row["nombre"]." ".$row["paterno"]." ".$row["materno"];
                                        }
                                    }
                                    ?>
                                </span></p>
                            <br>
                            <a href="../index.php" class="btn btn-primary">Regresa al Menu</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="js/app.js"></script>
        <script src="js/app.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>

<?php
mysqli_close($conexion);
?>