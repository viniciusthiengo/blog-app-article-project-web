<?php

class Database
{
    public static function saveDatabase( $database, $objetos ){
        $database = fopen( $database, 'w' );
        fwrite( $database, json_encode($objetos) );
        fclose( $database );
    }


    public static function getDados($database ){
        $dadosString = file_get_contents( $database );
        $objetos = json_decode($dadosString);
        return $objetos;
    }
}