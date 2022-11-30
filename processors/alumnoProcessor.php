<?php
require "../controllers/alumnoController.php";
include "../includes/connection.php";
$modificarAlumno = $_GET['modificarAlumno'];
$agregarAlumno = $_GET['agregarAlumno'];
$verAlumno = $_GET['verAlumno'];
$eliminarAlumno = $_GET['eliminarAlumno'];
$nombre = $_GET['nombre'];
$curso = $_GET['curso'];
$edad = $_GET['edad'];
$contactoNum = $_GET['contactoNum'];
$contactoMail = $_GET['contactoMail'];
$idAlumno = $_GET['idAlumno'];

if(isset($modificarAlumno)){
    $sql = "UPDATE `alumno` SET `nombre` = '$nombre', `edad` = '$edad', `email` = '$contactoMail', `telefono` = '$contactoNum', `idCurso` = '$curso' WHERE `alumno`.`id` = $idAlumno";
    mysqli_query(conectar(),$sql);
    header("Location:../views/index.php");
}
else if (isset($verAlumno)){
    header("Location:../views/verAlumno.php?verAlumno=$verAlumno");

}
else if (isset($eliminarAlumno)){
    $idAlumno = alumno::hidrateId($eliminarAlumno);
    alumno::deleteAlumno($idAlumno);
    header("Location:../views/index.php");
}
else if (isset($agregarAlumno)){
    $sql = "INSERT INTO `alumno` (`id`, `fecha`, `nombre`, `edad`, `email`, `telefono`, `idCurso`) VALUES (NULL, current_timestamp(), '$nombre', '$edad', '$contactoMail', '$contactoNum', '$curso');";
    mysqli_query(conectar(),$sql);
    header("Location:../views/index.php");
}