<?php

class Cliente{
    private $id;
    private $nome;
    private $email;

    protected const VALOR_ALUGUEL = 6.0;

    public function __construct($id, $nome, $email){
        $this->id = $id;
        $this->nome = $nome;
        $this->email = $email;
    }
    
    public function getId() {return $this->id;}
    public function getNome() {return $this->nome;}
    public function getEmail() {return $this->email;}

    public function getTipo(){
        return "comum";
    }

    public function calacularValor(){
        return self::VALOR_ALUGUEL;
    }

    public function toArray(){
        return [
            "id" => $this->id,
            "nome" => $this->nome,
            "email" => $this->email,
            "tipo" => $this->getTipo(),
        ];
    }

   public static function fromArray($d)
    {
        if ($d["tipo"] == "vip") {
            return new ClienteVip($d["id"], $d["nome"], $d["email"]);
        } else {
            return new Cliente($d["id"], $d["nome"], $d["email"]);
        }
    }
    
}

require_once __DIR__ . "/ClienteVip.php";
