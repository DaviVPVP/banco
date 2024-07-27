<?php
    namespace PHP\Modelo;

    require_once('Endereco.php');

    class Cliente extends Pessoa{
        protected string $dtNascimento;
        protected float $totalCompras;
    

    public function __construct(string $cpf, string $nome, string $telefone, Endereco $endereco, string $dtNascimento, float $totalCompras)
    {
        parent::__construct($cpf,$nome,$telefone,$endereco);
        $this->dtNascimento = $dtNascimento;
        $this->totalCompras = $totalCompras;
    }

    public function __get(string $campo){
        return $this->campo;
    }//fim do get

    public function __set(string $campo, string $valor):void{
        $this->campo = $valor;
    }//fim do set


    public function imprimir():string
    {
        return parent::imprimir().
               "<br>dtNascimento: ".$this->dtNascimento.
               "<br>totalCompras: ".$this->totalCompras;
    }//fim do string
    }
//fim do classe
?>