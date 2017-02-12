<?php

class MockData
{
    private static function getPosicaoCorreta( $posicao, $max, $min ){
        $posicao = $posicao >= $max ? $max - 1 : $posicao;
        $posicao = $posicao < $min ? $min : $posicao;
        return $posicao;
    }

    public static function criarPost( $posicao, $id ){
        $imagens = [
            "http://www.thiengo.com.br/img/post/80-80/mvp-android.png",
            "http://www.thiengo.com.br/img/post/80-80/como-colocar-notificacoes-bolha-em-seu-aplicativo-android.png",
            "http://www.thiengo.com.br/img/post/80-80/top-10-leituras-de-2016-que-sao-boas-pedidas-para-2017.png",
            "http://www.thiengo.com.br/img/post/80-80/androidannotations-entendendo-e-utilizando.png",
            "http://www.thiengo.com.br/img/post/80-80/estudando-android-lista-de-conteudos-do-blog.png",
            "http://www.thiengo.com.br/img/post/80-80/gcmnetworkmanager-para-execucao-de-tarefas-no-background-android.png"
        ];
        $titulos = [
            "MVP Android",
            "Como Colocar Notificações Bolha em Seu Aplicativo Android",
            "Top 10 leituras de 2016 que são boas pedidas para 2017",
            "AndroidAnnotations, Entendendo e Utilizando",
            "Estudando Android - Lista de Conteúdos do Blog",
            "GCMNetworkManager Para Execução de Tarefas no Background Android"
        ];
        $sumarios = [
            "Entenda o que é e como utilizar o padrão de arquitetura Model-View-Presenter em aplicativos Android, confira.",
            "Aprenda, passo a passo, como colocar notificações bolha (Floating Windows) em seus aplicativos Android, para melhor apresentar conteúdos não visualizados. Confira.",
            "10 excelentes leituras de 2016, do Blog, que podem fazer parte de sua biblioteca e aumento de produção em 2017, confira.",
            "Melhore a leitura do código de sua APP Android utilizando anotações para construção de scripts padrões que não fazem parte da lógica de negócio, confira.",
            "Estude pela lista, ordenada, de conteúdos em texto e em vídeo, do Blog, para você aprender a construir seus próprios aplicativos Android.",
            "Aprenda a criar um simples aplicativo Android, de GPS tracking, utilizando, para tarefas de background, o GCMNetworkManager."
        ];
        $favoritos = [ false, true, false, true, false, false ];
        $p = new Post();

        $posicao = self::getPosicaoCorreta( $posicao, count($imagens), 0 );
        $p->setId( $id );
        $p->setTitulo( $titulos[$posicao] );
        $p->setUriImagem( $imagens[$posicao] );
        $p->setSumario( $sumarios[$posicao] );
        $p->setEhFavorito( $favoritos[$posicao] );

        return $p;
    }

    public static function criarListaPost(){
        $posts = [];
        $posts[] = self::criarPost(0, 1);
        $posts[] = self::criarPost(1, 2);
        $posts[] = self::criarPost(2, 3);
        $posts[] = self::criarPost(3, 4);
        $posts[] = self::criarPost(4, 5);
        $posts[] = self::criarPost(5, 6);

        return $posts;
    }
}