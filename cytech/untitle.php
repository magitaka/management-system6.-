<?php

// class Sample
// {
//   public $name;
//   public $age;

//   public function showName(){
//     echo'名前:'.$this->name."\n";
//   }

//   public function showAge(){
//     echo'年齢:'.$this->age."歳\n";
//   }

//   public function showProperties(){
//     //メソッドの呼び出し
//     $this->showName();
//     $this->showAge();
//     echo"\n";
//   }
// }
// $sample1 = new Sample();
// $sample1->name = '太郎';
// $sample1->age = 10;
// $sample2 = new Sample();
// $sample2->name = '花子';
// $sample2->age = 11;

// // オブジェクト変数からのメソッドへのアクセスはプロパティ同様「->」
// // で繋いで呼び出します 
// $sample1->showProperties(); 
// $sample2->showProperties();

class Sample
{
  public $name;


  public function __construct($name){
    echo "インスタンスを生成しました。\n";
    $this->name = $name;
  }

  public function showName(){
    echo '名前:'.$this->name."\n";
  }
}
$sample = new Sample('太郎');
$sample->showName();

//アクセス修飾子

// class A
// {
//   protected $b = 'b';

//   public function c(){
//     echo $this->b;
//   }
// }
// $a = new A();
// $a->c();

// class A
// {
//   protected $a1 = 'a1';

//   protected function a2(){
//     echo 'a2';
//   }
// }

// class B extends A
// {
//   public function b1(){
//     echo $this->a1."\n";
//   }

//   public function b2(){
//     $this->a2."\n";
//   }
// }

// $b = new B();
// $b->b1();
// $b->b2();

// echo $b->a1;

// Personを定義します 
class Person 
{ 
    // 名前プロパティです 
    protected $name;

    // 年齢プロパティです 
    protected $age; 
  
    public function getName() { 
        return $this->name; 
    } 

    public function getAge() { 
        return $this->age; 
    } 
  
    public function setName($name)  { 
        $this->name = $name; 
    } 

    public function setAge($age)  { 
        $this->age = $age; 
    }
}

// Personを継承した、Teacherを定義します
class Teacher extends Person 
{ 
    private $subject;

    private $category;

    public function getSubject()  { 
        return $this->subject; 
    }
 
    public function getCategory()  { 
        return $this->category;
    } 
  
    public function setSubject($subject)  { 
        $this->subject = $subject;
    } 
 
    public function setCategory($category) { 
        $this->category = $category; 
    } 
} 

?>

