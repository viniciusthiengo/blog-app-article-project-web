<?php

class Post
{
    public $id;
    public $titulo;
    public $uriImagem;
    public $sumario;
    public $ehFavorito;


    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }


    public function getTitulo()
    {
        return $this->titulo;
    }
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }


    public function getUriImagem()
    {
        return $this->uriImagem;
    }
    public function setUriImagem($uriImagem)
    {
        $this->uriImagem = $uriImagem;
    }


    public function getSumario()
    {
        return $this->sumario;
    }
    public function setSumario($sumario)
    {
        $this->sumario = $sumario;
    }


    public function getEhFavorito()
    {
        return $this->ehFavorito;
    }
    public function setEhFavorito($ehFavorito)
    {
        if( $ehFavorito === 'true' || $ehFavorito === true || $ehFavorito === 1 ){
            $this->ehFavorito = true;
        }
        else{
            $this->ehFavorito = false;
        }
    }
}