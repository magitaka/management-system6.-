<?php

$globalVariable = 'グローバル変数です';

function checkScope($str){
  $localVariable = 'ローカル変数です';
  echo $str;
}

echo $globalVariable;

checkScope($globalVariable); 

?>