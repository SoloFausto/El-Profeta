<?php
    function conectar(){
        $conn =mysqli_connect(
            'localhost',
            'root',
            '',
            'el-profeta',
            '3306'
        );
        return  $conn;
    }



?>