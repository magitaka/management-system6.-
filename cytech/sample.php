<?php

$str = "Hello";
echo $str;

$numberList = [1,2,3];

$numberList = [];
$numberList[0] = 1;
$numberList[1] = 2;
$numberList[2] = 3;

echo $numberList[1];

$array = [1,2,3];
echo count($array);

//組み込み関数

$text = 'ABCDE';
//Aを０としてBが２などと続く

//存在しない文字を打つとfalseが出る
strpos($text, "F");
//大文字小文字も区別する この場合falseが出る
strpos($text,"a");

$text = 'ABCDEFGHIJKLMN'; 
// Aを0として、Bが1, Cが2...という風に続きます。 
$subString = substr($text, 2, 3); 
echo $subString; 
// 出力結果 
// CDE 

$numbers = array(10, 5, 20, 15); 
rsort($numbers); 
var_dump($numbers); 

echo time(); 
# 出力例(リアルタイムで値が変わるため、内容が異なる) 

// 第一引数でフォーマットをある程度自由に設定できる
$timestamp = date('Y-m-d H:i:s', time()); 
echo $timestamp; 

$a;
$b = 2;
$c = [];

var_dump(isset($a)); 
// false 
// 代入されていない(セットされていない)値はfalseとなる 

var_dump(isset($b)); 
// true 
// 値が格納されていればtrue 

var_dump(isset($c)); 
// false 
// 定義していない(セットされていない)値もfalseとなる 

//var_dump($d); 
// true 
// 空の配列は、NULL以外の値であるため、trueとなる 

// 定義方法 
//function 関数名() { 
  // 処理 
//} 

// 呼び出し方法 
//関数名(); 

// 関数を定義します 
function aisatsu() { 
  // 関数内では「Hello」の出力を実行します 
  echo 'Hello'; 
} 
// 関数を呼び出します 
aisatsu(); 
// 出力結果 
// Hello 

// 円の面積を求めて出力する関数 
//function showDiskArea($radius) { 
  //$pi = 3.14; 
  //echo ($radius * $radius * $pi); 
//} 
//showDiskArea(10); 
// 出力結果 
// 314 
//仮引数を設定している場合、引数を渡さないと Uncaught ArgumentCountError というエラーになり ます。

function showDiskArea($radius,$pi){
  echo($radius * $radius * $pi);
}
showDiskArea(10,3.14);

function getA() { 
  $a = 'a'; 
  // 返り値の指定 
  return $a; 
} 
// これはecho 'a';と同様です 
echo getA(); 

// 次の書き方だと'a';とやっているのと同様なので、何も起きません 
getA(); 

function getNone() { 
  return; 
}

function showA() { 
  // 出力が返り値だと勘違いしやすいですが、返り値は別に存在します。
  echo "a\n"; 
} 

var_dump(getNone()); 
echo "\n"; 
var_dump(showA()); 

// 計算結果を出力する関数 
function showCalculationResult($number, $factor) { 
  // 乗算 
  $calculationResult = $number * $factor; 
  // 乗算結果が0以下であれば出力されます 
  if ($calculationResult <= 0) { 
      echo "結果が0以下になりました。\n"; 
      return; 
  } 
  // 乗算結果が0以下の場合、出力されません 
  echo "計算結果は" . $calculationResult . "です。\n"; 
} 
showCalculationResult(10, 1.1); 
showCalculationResult(10, -1); 
showCalculationResult(10, 0); 


//class Sample
//{
  //public $sampleProperty1;
  // プロパティは複数設定することができます 
  //public $sampleProperty2;

  // アクセス修飾子 function 関数名() 
  //public function sampleMethod1() { 
    // 処理 
  //} 

  // メソッドも複数作成可能です 
  //public function sampleMethod2() { 
    // 処理 
  //}
//}
// $sample = new Sample();

//インスタンス生成 次の例では、Sampleクラスを定義し、 
//$sample にインスタンス生成し、 実体化されたオブジェクト型の値を変数に代入(以降、オブジェクト変数)しています。

// クラスの定義 
//class Sample 
//{ 
//    public $name = '太郎'; 
//}

// インスタンス生成 
// $sample = new Sample(); 
// objectをvar_dump()すると、次のようになります 
// var_dump($sample); 

//プロパティへのアクセス オブジェクト変数と、プロパティの間に -> (アロー演算子, arrow operator)
//を繋いで記述すると、 オブジェクト変数からプロパティにアクセスすることができます。

// class Sample 
// { 
//   public $name = '太郎'; 
// } 
// $sample = new Sample(); 
// // $nameプロパティを出力します 
// echo $sample->name; 
// // 出力結果) 太郎 
// // $nameプロパティの上書きします 
// $sample->name = '花子'; 
// var_dump($sample->name); 

?>