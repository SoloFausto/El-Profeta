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
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js" ></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script src="../script.js"></script>
<div class="titlebox">
 <h2>Agregar un alumno</h2>
    <a href="index.php" class="btn btn-primary">Volver</a>
</div>
<div style="text-align:center;">
<form method="GET" action="../processors/alumnoProcessor.php">
<input type="hidden" name="agregarAlumno" value="1"> 
        <div class="cajaEntrada">

        <label for="nombre">Nombre</label><br>
        <input type="text" placeholder="Ingrese un nombre" name="nombre">
<br>

        <label for="curso">Centro y curso</label><br>
        <select name="curso" id="curso">
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
<br>

        <label for="edad">Edad</label><br>
        <input type="text" placeholder="Ingrese su edad" name="edad">
<br>

        <label for="contactoNum">Número de teléfono</label><br>
        <input type="text" placeholder="Ingrese número de teléfono" name="contactoNum">
<br>

        <label for="contactoMail">E-mail</label><br>
        <input type="text" placeholder="Ingrese E-mail" name="contactoMail">
<br>
        <input type="submit" value="Enviar" name="boton">

        </div>
    </form>
    </div>
</body>
</html>