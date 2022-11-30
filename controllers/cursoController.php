<?php
    class curso{
        static function hidrateNumCurso(){
            $sql = "SELECT `id` FROM `curso` ORDER BY `id` ASC";
            $result = mysqli_query(conectar(),$sql);
            $respuesta = array();
            while($objetoArray = mysqli_fetch_object($result)){  
                $propiedad = $objetoArray->id;  
                array_push($respuesta,$propiedad);  
            }
            return count($respuesta);
        }
        static function hidrateNombreCurso($index){
            $sql = "SELECT `nombreCurso` FROM `curso` ORDER BY `id` ASC";
            $result = mysqli_query(conectar(),$sql);
            $respuesta = array();
            while($objetoArray = mysqli_fetch_object($result)){  
                $propiedad = $objetoArray->nombreCurso;  
                array_push($respuesta,$propiedad);  
            }
            return $respuesta[$index];
        }
        static function hidrateNombreCentro($index){
            $sql = "SELECT `nombreCentro` FROM `curso` ORDER BY `id` ASC";
            $result = mysqli_query(conectar(),$sql);
            $respuesta = array();
            while($objetoArray = mysqli_fetch_object($result)){  
                $propiedad = $objetoArray->nombreCentro;  
                array_push($respuesta,$propiedad);  
            }
            return $respuesta[$index];
        }
        static function hidrateId($index){
            $sql = "SELECT `id` FROM `curso` ORDER BY `id` ASC";
            $result = mysqli_query(conectar(),$sql);
            $respuesta = array();
            while($objetoArray = mysqli_fetch_object($result)){  
                $propiedad = $objetoArray->id;  
                array_push($respuesta,$propiedad);  
            }
            return $respuesta[$index];
        }
        
    }