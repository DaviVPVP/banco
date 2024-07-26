<?php
namespace PHP\Modelo;

class Funcionario{
    private int $matricula;
    private string $nome;
    private float $salario;
    private string $cargo;
    private string $endereco;
    private string $telefone;

    //Construtor
    public function __construct(int     $matricula,
                                string  $nome, 
                                float   $salario, 
                                string  $cargo, 
                                string  $endereco, 
                                string  $telefone){
        $this->matricula = $matricula;
        $this->nome      = $nome;
        $this->salario   = $salario;
        $this->cargo     = $cargo;
        $this->endereco  = $endereco;
        $this->telefone  = $telefone;
    }//fim do construct

    public function getMatricula():int
    {
        return $this->matricula;
    }//fim do getMatricula

    public function getNome():string
    {
        return $this->nome;
    }//fim do getMatricula

    public function getSalario():float
    {
        return $this->salario;
    }//fim do getMatricula

    public function getCargo():string
    {
        return $this->cargo;
    }//fim do getMatricula

    public function getEndereco():string
    {
        return $this->endereco;
    }//fim do getMatricula
    
    public function getTelefone():string
    {
        return $this->telefone;
    }//fim do getMatricula



    public function setMatricula(int $matricula):void
    {
        $this->matricula = $matricula;
    }//fim do setEndereco

    public function setNome(string $nome):void
    {
        $this->nome = $nome;
    }//fim do setEndereco

    public function setSalario(float $salario):void
    {
        $this->salario = $salario;
    }//fim do setEndereco

    public function setCargo(string $cargo):void
    {
        $this->cargo = $cargo;
    }//fim do setEndereco

    public function setEndereco(string $endereco):void
    {
        $this->endereco = $endereco;
    }//fim do setEndereco 

    public function setTelefone(string $telefone):void
    {
        $this->telfone = $telfone;
    }//fim do setEndereco

    public function imprimir():string
    {
        return "<br>Matrícula: ".$this->getMatricula().
               "<br>Nome: ".$this->getNome().
               "<br>Telefone: ".$this->getTelefone().
               "<br>Endereço: ".$this->getEndereco().
               "<br>Cargo: ".$this->getCargo().
               "<br>Salário: ".$this->getSalario();
    }//fim do string

}//fim do classe

?>