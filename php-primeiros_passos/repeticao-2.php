<?php

$contador+=1;
$contador = $contador+1;
$contador++ ;

for ($contador = 1; $contador <= 15; $contador +=1 ) {  
    if($contador == 13) {
        break;
    }
    echo "#$contador". PHP_EOL;   
   




    
}






// quando sabemos o limite, ou seja até quando o loop vai percorrer, usamos o FOR 

// Usamos o while quando os limites são mais dinamicos

/*Vamos utilizar o while quando não sabemos quando o loop se encerrará.
Quando é uma decisão um pouco mais complexa.
Já o for é utilizado quando sabemos o momento de saída do loop.
Normalmente, quando temos um caso de uso de variável contadora.*/