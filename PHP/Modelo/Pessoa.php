<?php
    namespace PHP\Modelo;

    class Pessoa{
        //Declarando variáveis 
        private string $cpf;
        private string $nome;
        private string $telefone;
        private string $endereco;

        //Método construtor
        public function __construct(string $cpf, string $nome, string $telefone, string $endereco){
            $this->cpf = $cpf;
            $this->nome = $nome;
            $this->telefone = $telefone;
            $this->endereco = $endereco;
        }//fim do construtor

        //Métodos de acesso e modificação
        public function getCPF():string
        {
            return $this->cpf;
        }//fim do get cpf

        public function getNome():string
        {
            return $this->nome;
        }//fim do get nome

        public function getTelefone():string
        {
            return $this->telefone;
        }//fim do get telefone

        public function getEndereco():string
        {
            return $this->endereco;
        }//fim do get endereco

        public function setCPF(string $cpf):void
        {
            $this->cpf = $cpf;
        }//fim do setCPF

        public function setNome(string $nome):void
        {
            $this->nome = $nome;
        }//fim do setNome

        public function setTelefone(string $endereco):void
        {
            $this->endereco = $endereco;
        }//fim do setTelefone

        public function setEndereco(string $endereco):void
        {
            $this->endereco = $endereco;
        }//fim do setEndereco

        public function imprimir():string
        {
            return "<br>CPF: ".$this->getCPF().
                   "<br>Nome".$this->getNome().
                   "<br>Telefone".$this->getTelefone().
                   "<br>Endereco".$this->getEndereco();
        }//fim do imprimir
    }//fim da classe
?>