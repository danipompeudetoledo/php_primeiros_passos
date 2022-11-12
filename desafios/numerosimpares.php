
//imprimir todos os numeros impares até 100

<?php

$contador=1;

for ($contador = 1; $contador <= 100; $contador +=1 ) {  
    if($contador %2 == 1) {
        echo "#$contador". PHP_EOL; 
        
    } else{
        continue;
    }
    

}