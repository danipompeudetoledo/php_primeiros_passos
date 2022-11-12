<?php

$idade = 18;
$numeroDePessoas =1;
$nome = 'vinicius';
 echo  "voce so pod entrar se tiver  a partir de  18 anos" .PHP_EOL;
 echo "ou apartir de 16 acompanhado" .PHP_EOL;

 if ($idade >= 18) {
         echo  "voce tem $idade anos. pode entrar sozinho" ;
 }
 else if ($idade>=16 && $numeroDePessoas>1) {
     echo "voce tem $idade anos. Esta acompnhada então PODE ENTRAR";
 }
 else{
        echo "voce só tem $idade. vOCE NÃO PODE ENTRAR";
        echo PHP_EOL . "É UMA PENA";

 }


 echo PHP_EOL;
 echo "Adeus";




