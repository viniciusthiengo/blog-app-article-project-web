<?php
    /*
     * Caso queira encontrar alguns erros em sua aplicação backend,
     * descomente a linha abaixo.
     * */
    /*ini_set('display_errors', 1);*/

    include '../domain/User.php';
    include '../domain/Post.php';
    include '../apl/AplAdmin.php';


    /*
     * A superglobal GET é para quando estiver realizando testes pelo navegador
     * para não precisar configurar toda a APP para simples testes no backend.
     * */
    $dados = isset($_POST['metodo']) ? $_POST : $_GET;


    if( strcasecmp( $dados['metodo'], 'get-posts' ) == 0 ){
        sleep(1);

        $user = new User( $dados['email'] );
        AplAdmin::saveUser($user);

        $postsJson = AplAdmin::getPostsComoJson();
        echo $postsJson;
    }

    else if( strcasecmp( $dados['metodo'], 'get-users' ) == 0 ){
        $usersJson = AplAdmin::getUsersComoJson();
        echo $usersJson;
    }
