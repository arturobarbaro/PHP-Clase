<?php

function suma($a = 0, $b = 0){
  return $a+$b;
}

echo suma(2,suma(null+1,1)) . "\n";
