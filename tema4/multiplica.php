<?php
unset($argv[0]);

if (isset($argv[1]) && is_numeric($argv[1])){
    for ($i=1; $i<=10; $i++){
        $n = $argv[1]*$i;
        echo "$argv[1] x $i = $n\n";
    }
} else{
    echo "Error: introduzca un numero\n";
    exit(1);
}
