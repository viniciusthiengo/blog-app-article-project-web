<?php

include '../data/Database.php';

class AplAdmin
{
    public static function getPostsComoJson(){
        $objetos = Database::getDados( '../data/posts.json' );
        return json_encode( $objetos );
    }

    public static function getUsersComoJson(){
        $objetos = Database::getDados( '../data/users.json' );
        return json_encode( $objetos );
    }

    public static function saveUser( User $user ){
        if( !$user->ehEmail() ){
            /* EMAIL INVÁLIDO */
            return;
        }

        $users = Database::getDados( '../data/users.json' );
        foreach( $users as $u ){
            if( strcasecmp( $u->email, $user->email ) == 0 ){
                /* EMAIL JÁ SALVO */
                return;
            }
        }

        /* SALVANDO NOVO EMAIL */
        $users[] = $user;
        Database::saveDatabase( '../data/users.json', $users );
    }
}