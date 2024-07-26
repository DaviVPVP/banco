<?php
    namespace PHP\Modelo;

    class Cliente{
        private string $cpf;
        private string $nome;
        private string $telefone;
        private string $endereco;
        private date $dtNascimento;
        private float $totalCompras;
    

    public function __construct(string $cpf, string $nome, string $telefone, string $endereco, date $dtNascimento, float $totalCompras){
        $this->cpf = $cpf;
        $this->nome = $nome;
        $this->telefone = $telefone;
        $this->endereco = $endereco;
        $this->dtNascimento = $dtNascimento;
        $this->totalCompras = $totalCompras;
    }

    public function getCpf():string
    {
        return $this->cpf;
    }//fim do getMatricula

    public function getNome():string
    {
        return $this->nome;
    }//fim do getMatricula

    public function getTelefone():string
    {
        return $this->telefone;
    }//fim do getMatricula

    public function getEndereco():string
    {
        return $this->endereco;
    }//fim do getMatricula

    public function getdtNascimento():date
    {
        return $this->dtNascimento;
    }//fim do getMatricula
    
    public function getTotalCompras():float
    {
        return $this->totalCompras;
    }//fim do getMatricula



    public function setCpf(int $cpf):void
    {
        $this->cpf = $cpf;
    }//fim do setEndereco

    public function setNome(string $nome):void
    {
        $this->nome = $nome;
    }//fim do setEndereco

    public function setTelefone(float $telefone):void
    {
        $this->telefone = $telefone;
    }//fim do setEndereco

    public function setEndereco(float $endereco):void
    {
        $this->endereco = $endereco;
    }//fim do setEndereco

    public function setDtNascimento(string $dtNascimento):void
    {
        $this->dtNascimento = $dtNascimento;
    }//fim do setEndereco 

    public function setTotalCompras(string $totalCompras):void
    {
        $this->totalCompras = $totalCompras;
    }//fim do setEndereco

    public function imprimir():string
    {
        return "<br>CPF: ".$this->getCpf().
               "<br>Nome: ".$this->getNome().
               "<br>Telefone: ".$this->getTelefone().
               "<br>Endereço: ".$this->getEndereco().
               "<br>dtNascimento: ".$this->getDtNascimento().
               "<br>totalCompras: ".$this->getTotalCompras();
    }//fim do string
    }
//fim do classe
?>