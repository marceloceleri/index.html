

<?php
/**
 * Created by PhpStorm.
 * User: Marcelo
 * Date: 14/01/2016
 * Time: 20:35
 */

/** 1- faça uma funcao que some dois numero e chame ele no site
    2- crie um form e informe os numeros para serem somados
   3- crie um form no index que mande os numeros para o arquivo do php somar

 */

echo"Digite o numero <br>";

$v1=$_POST['txt1'];
$v2=$_POST['txt2'];


echo "A soma é igual a: " . somar($v1,$v2);


function somar ( $p1, $p2){
//teste
return $p1+$p2;


}



?>