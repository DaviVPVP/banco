<?php
    namespace PHP\Modelo; //Definir o local do projeto
    require_once('Pessoa.php');
    require_once('Funcionario.php');
    require_once('Cliente.php');

    $pessoa1 = new Pessoa("12356862123","Allan","11999999999","Rua Jeri");
    $pessoa2 = new Pessoa("12356862124","João","11999999998","Rua Bla");

    $funcionario1= new Funcionario(123, "Davi", 1000, "Gerente", "Senador Vergueiro", "1165656565");

    $cliente1= new Cliente("12345678", "Fabio", "10009999", "Maua", 20/07/2000, 100);


    echo $pessoa1->imprimir();
    echo $pessoa2->imprimir();
    echo $funcionario1->imprimir();
    echo $cliente1->imprimir();


?>