<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<link rel="stylesheet" type="text/css" href="../includes/css.css">
<?php require "../controllers/alumnoController.php";
include "../includes/connection.php";
require "../controllers/cursoController.php";
$alumnoIndex = $_GET['modificarAlumno'];
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js" ></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script src="../script.js"></script>
<h2>Modificar un Alumno</h2>
<a href="index.php">Volver</a>
<form method="GET" action="../processors/alumnoProcessor.php">
<input type="hidden" name="modificarAlumno" value="1">
<input type="hidden" name="idAlumno" value="<?php echo alumno::hidrateId($alumnoIndex)?>">
        <div class="cajaEntrada">

        <label for="nombre">Nombre</label><br>
        <input type="text" placeholder="Ingrese un nombre" name="nombre" value="<?php echo alumno::hidrateNombre($alumnoIndex)?>">
<br>

        <label for="curso">Centro y curso</label><br>
        <select name="curso" id="curso">
        <option value="">Selecciona un curso</option>
        <?php 
          $numeroCursos = curso::hidrateNumCurso();
          $i = 0;
          while ($i < $numeroCursos){
        ?>
         <option value="<?php echo curso::hidrateId($i)?>">Curso: <?php echo curso::hidrateNombreCurso($i)?>, Centro: <?php echo curso::hidrateNombreCentro($i)?></option>
         <?php 
        $i++;
        } ?>
        </select>
        <p>(curso anterior: <?php echo alumno::hidrateCurso($alumnoIndex)," en "; echo alumno::hidrateCentro($alumnoIndex)?>)</p>


        <label for="edad">Edad</label><br>
        <input type="text" placeholder="Ingrese su edad" name="edad" value="<?php echo alumno::hidrateEdad($alumnoIndex);?>">
<br>

        <label for="contactoNum">Número de teléfono</label><br>
        <input type="text" placeholder="Ingrese número de teléfono" name="contactoNum" value="<?php echo alumno::hidrateTelefono($alumnoIndex);?>">
<br>

        <label for="contactoMail">E-mail</label><br>
        <input type="text" placeholder="Ingrese E-mail" name="contactoMail" value="<?php echo alumno::hidrateEmail($alumnoIndex)?>">
<br>
        <input type="submit" value="Enviar" name="boton">

        </div>
    </form>
</body>
</html>