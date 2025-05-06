<?php
//estrutura do PHP

//comentário em linha
/**
 * Comentário em bloco
 * 
 */
  echo"Olá,mundo";

  //Tipos de dados
  //String tioSAM;

/**
 * Para declarar uma variável em PHP
 * devemos utilizar o sinal de $
 */

    $nome= "Torantina Macedo"; //string
    $idade   = 28; // inteiro
    $altura  = 1.69; //double
    $peso    = 98.5; //double
    $vacinada = false; //booleano

    echo "Nome: $nome<br>\n
        Idade: $idade<br>\n
        Altura: $altura<br>\n
        Peso: $peso<br>\n
        Vacinado(a): $isVacinada
    ";

    //CONDICIONAIS
    if($idade >= 18){
        echo "$nome, é menor de idade e possui $idade anos";
    }else{
        echo "$nome, é menor de idade e possui $idade anos";

    }

    echo "<br>\nLAÇOS<br>\n";
    
    for($i= 1; $i <= 100; $i++){
        echo "$i <br>\n";
    }
?>