<?php

class Aluguel{
    private $id;
    private $cliente;
    private $livro;
    private $data;

    public function __construct($id, $cliente, $livro, $data){
        $this->id = $id;
        $this->cliente = $cliente;
        $this->livro = $livro;
        $this->data = $data;
    }

    public function getId() {return $this->id;}
    public function getCliente() {return $this->cliente;}
    public function getLivro() {return $this->livro;}
    public function getData() {return $this->data;}

    public function getValor(){
        return $this->cliente->calcularValor();
    }

    public function toArray(){
        return [
            'id' => $this->id,
            'clienteId' => $this->cliente->getId(),
            'livroId' => $this->livro->getId (),
            'data' => $this->data
        ];
    }
}