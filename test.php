<?php
  // //設問１
  $number = 5;
  $text = "ああああ";
  $flag = true;
  $test = null;

  // //設問２
  echo $number;
  echo $text;
  var_dump($flag);
  var_dump($test);

  // //設問３
  $number1 = 10;
  $number2 = 5;

  echo $number1 + $number2."\n";
  echo $number1 - $number2."\n";
  echo $number1 * $number2."\n";
  echo $number1 / $number2."\n";
  echo $number1 % $number2."\n";

  //設問４
  $a = time();

  if($a % 2 == 0){
    echo "偶数です";
  } else{
    echo "奇数です";
  }
  
  //設問５
  $a = time();

  switch ($a % 2 == 0){
    case 0:
      echo "偶数です";
      break;
    case 1:
      echo "奇数です\n";
      break;
  }

  //設問６
  for ($i = 1; $i <= 10; $i ++) { 
    echo $i . "\n "; 
  }

  //設問７
  for ($i = 3; $i < 100; $i += 3){
    echo $i . "\n ";
  }

  //設問８
  $i = 1000;

  for(; $i % 10 !== 7; $i++){}
    echo $i;
  for(; $i <= 2000; $i++){}
  echo PHP_EOL;

  //設問９
  for ($i = 0; $i < 3; $i++){
    for($j = 0; $j<= $i; $j++){
      echo "0";
    }
    echo PHP_EOL;
  }

  //設問１０
  $array = [1, 2, 3]; 

  //設問１１
  $array[] = 4;

  //設問１２
  echo $array[0];

  //設問１３
  for ($i = 0; $i <= 3; $i ++) { 
    echo $array[$i];
  }

  //設問１４
  foreach($array as $key => $value) {
    echo $key . ': ' . $value . "\n";
  }
?>