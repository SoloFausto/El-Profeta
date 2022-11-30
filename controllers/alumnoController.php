<?php

class alumno{
        
        static function countAlumnos(){
            $sql = "SELECT `id` FROM `alumno` ORDER BY `id` ASC";
            $result = mysqli_query(conectar(),$sql);
            $respuesta = array();
            while($objetoArray = mysqli_fetch_object($result)){  
                $propiedad = $objetoArray->id;  
                array_push($respuesta,$propiedad);  
            }
            return count($respuesta);
        }
        static function hidrateCurso($index){
            $sql = "SELECT `idCurso` FROM `alumno` ORDER BY `id` ASC";
            $result = mysqli_query(conectar(),$sql);
            $respuesta = array();
            while($objetoArray = mysqli_fetch_object($result)){  
                $propiedad = $objetoArray->idCurso;  
                array_push($respuesta,$propiedad);  
            }
            $curso = $respuesta[$index];
            $sql2 = "SELECT `nombreCurso` FROM `curso` WHERE `id` = $curso";
            $result2 = mysqli_query(conectar(),$sql2);
            $objetoResult2 = mysqli_fetch_object($result2);
            return $objetoResult2->nombreCurso;
        }
        static function hidrateCentro($index){
            $sql = "SELECT `idCurso` FROM `alumno` ORDER BY `id` ASC";
            $result = mysqli_query(conectar(),$sql);
            $respuesta = array();
            while($objetoArray = mysqli_fetch_object($result)){  
                $propiedad = $objetoArray->idCurso;  
                array_push($respuesta,$propiedad);  
            }
            $curso = $respuesta[$index];
            $sql2 = "SELECT `nombreCentro` FROM `curso` WHERE `id` = $curso";
            $result2 = mysqli_query(conectar(),$sql2);
            $objetoResult2 = mysqli_fetch_object($result2);
            return $objetoResult2->nombreCentro;
        }
        
        static function hidrateId($index){
            $sql = "SELECT `id` FROM `alumno` ORDER BY `id` ASC";
            $result = mysqli_query(conectar(),$sql);
            $respuesta = array();
            while($objetoArray = mysqli_fetch_object($result)){  
                $propiedad = $objetoArray->id;  
                array_push($respuesta,$propiedad);  
            }
            return $respuesta[$index];
        }
        static function hidrateFecha($index){
            $sql = "SELECT `fecha` FROM `alumno` ORDER BY `id` ASC";
            $result = mysqli_query(conectar(),$sql);
            $respuesta = array();
            while($objetoArray = mysqli_fetch_object($result)){  
                $propiedad = $objetoArray->fecha;  
                array_push($respuesta,$propiedad);  
            }
            return $respuesta[$index];
        }
        static function hidrateNombre($index){
            $sql = "SELECT `nombre` FROM `alumno` ORDER BY `id` ASC";
            $result = mysqli_query(conectar(),$sql);
            $respuesta = array();
            while($objetoArray = mysqli_fetch_object($result)){  
                $propiedad = $objetoArray->nombre;  
                array_push($respuesta,$propiedad);  
            }
            return $respuesta[$index];
        }
        static function hidrateEdad($index){
            $sql = "SELECT `edad` FROM `alumno` ORDER BY `id` ASC";
            $result = mysqli_query(conectar(),$sql);
            $respuesta = array();
            while($objetoArray = mysqli_fetch_object($result)){  
                $propiedad = $objetoArray->edad;  
                array_push($respuesta,$propiedad);  
            }
            return $respuesta[$index];
        }
        static function hidrateEmail($index){
            $sql = "SELECT `email` FROM `alumno` ORDER BY `id` ASC";
            $result = mysqli_query(conectar(),$sql);
            $respuesta = array();
            while($objetoArray = mysqli_fetch_object($result)){  
                $propiedad = $objetoArray->email;  
                array_push($respuesta,$propiedad);  
            }
            return $respuesta[$index];
        }
        static function hidrateTelefono($index){
            $sql = "SELECT `telefono` FROM `alumno` ORDER BY `id` ASC";
            $result = mysqli_query(conectar(),$sql);
            $respuesta = array();
            while($objetoArray = mysqli_fetch_object($result)){  
                $propiedad = $objetoArray->telefono;  
                array_push($respuesta,$propiedad);  
            }
            return $respuesta[$index];
        }
        static function deleteAlumno($idAlumno){
            $sql = "DELETE FROM alumno WHERE `alumno`.`id` = $idAlumno";
            mysqli_query(conectar(),$sql);

        }

        
    }