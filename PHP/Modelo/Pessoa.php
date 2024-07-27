<?php
    namespace PHP\Modelo;

    require_once('Endereco.php');

    class Pessoa{
        //Declarando variáveis 
        private string $cpf;
        private string $nome;
        private string $telefone;
        protected Endereco $endereco;

        //Método construtor
        public function __construct(string $cpf, string $nome, string $telefone, Endereco $endereco){
            $this->cpf = $cpf;
            $this->nome = $nome;
            $this->telefone = $telefone;
            $this->endereco = $endereco;
        }//fim do construtor

        //Métodos de acesso e modificação
        
        public function __get(string $nome){
            return $this->nome;    
        }//fim do get genérico

        public function __set(string $campo, string $valor):void{
            $this->campo = $valor;
        }//fim do set

        public function imprimir():string
        {
            return "<br>CPF: ".$this->cpf.
                   "<br>Nome: ".$this->nome.
                   "<br>Telefone: ".$this->telefone;
        }//fim do imprimir
    }//fim da classe
?>