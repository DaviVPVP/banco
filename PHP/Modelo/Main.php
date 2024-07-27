<?php
    namespace PHP\Modelo; //Definir o local do projeto
    require_once('Pessoa.php');
    require_once('Funcionario.php');
    require_once('Cliente.php');
    require_once('Endereco.php');

    $enderecoCliente1 = new Endereco('Rua Jiparana',
                                      123, 
                                      'Berini',
                                      'São Paulo', 'São Paulo', 'SP', 'Brasil','777333');
    $cliente1 = new Cliente('12345678','Davi','11999999999',$enderecoCliente1, '17/04/1989',
    1000);

    echo $cliente1->imprimir();
    echo $enderecoCliente1->imprimir();

    echo "<br><br>";

    $enderecoFunc1 = new Endereco("Rua Jeri", 123, "manaus","Rio de Janeiro", "Rio de Janeiro", "RJ", "Brasil", "01312312");
    $funcionario1 = new Funcionario("12345687", 123, "Astolfo", 1256, "Gerente", $enderecoFunc1, "119821213");

    echo $enderecoFunc1->imprimir();
    echo $funcionario1->imprimir();


?>