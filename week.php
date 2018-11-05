<?php
// $a=0;
// for ($i=0; $i <=100; $i++) {
//     $a+=$i;
// }
// echo $a;
// echo array_sum(range(1,100));

// function sum($str,$count){
//     if ($count>100) {
//         echo $str;
//     }else{
//         $str+=$count;
//         sum($str,$count+1);
//     }
// }
// sum($str=0,$count=0);
//  $n=6;
// for ($i=0; $i <6; $i++) {
//     $n=$n*($n-1);
//     echo $n;echo "<hr>";
// }
// echo $n;
 // function ishuiwen($str){
 //  $len=strlen($str);
 //  $l=1;
 //  $k=intval($len/2)+1;
 //   for($j=0;$j<$k;$j++){
 //    if (substr($str,$j,1)!=substr($str,$len-$j-1,1))
 //     {
 //  $l=0;
 //  break;
 //   }
 // }
 // if ($l==1)
 // {
 // return 1;
 // }
 // else
 // {
 // return -1;
 //  }
 // }
 // $str=1231;
 // echo ishuiwen($str);
 class Person{
    public $name;
    public $age;
 }
 interface Walk{

 }
 class Student extends Person implements Walk{

 }
 $obj1=new Student();
 $obj1->name="申奇龙";
 $obj1->age=6;

 $obj2=new Student();
 $obj2->name="王波";
 $obj2->age=7;

 $obj3=new Student();
 $obj3->name="迟方毅";
 $obj3->age=8;

 $obj4=new Student();
 $obj4->name="段狗";
 $obj4->age=9;

 $obj5=new Student();
 $obj5->name="小高";
 $obj5->age=10;

 $obj6=new Student();
 $obj6->name="老cai";
 $obj6->age=11;

 $data[$obj1->name]=$obj1->age;
 $data[$obj2->name]=$obj2->age;
 $data[$obj3->name]=$obj3->age;
 $data[$obj4->name]=$obj4->age;
 $data[$obj5->name]=$obj5->age;
 $data[$obj6->name]=$obj6->age;
 // print_r($data);
  print_r(four($data));
  function four($data){
    return max($data);
  }
?>
