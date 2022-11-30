<!DOCTYPE html>
<html lang="en">
    <?php
    $verAlumno = $_GET['verAlumno'];

    ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Alumno</title>
</head>
<body>
    <link rel="stylesheet" type="text/css" href="../includes/css.css">
    <?php require "../controllers/alumnoController.php";
    include "../includes/connection.php";

    ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js" ></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="../script.js"></script>
    <a href="index.php">Volver</a>
    <h2>Nombre: <?php echo alumno::hidrateNombre($verAlumno)?></h2>
    <h2>Curso: <?php echo alumno::hidrateCurso($verAlumno)?></h2>
    <h2>Edad: <?php echo alumno::hidrateEdad($verAlumno)?></h2>
    <h2>Email: <?php echo alumno::hidrateEmail($verAlumno)?></h2>
    <h2>Telefono: <?php echo alumno::hidrateTelefono($verAlumno)?></h2>
    <h2>Centro de estudio: <?php echo alumno::hidrateCentro($verAlumno)?></h2>
    <h2>Fecha de ingreso al sistema: <?php echo alumno::hidrateFecha($verAlumno)?></h2>
</body>
</html>