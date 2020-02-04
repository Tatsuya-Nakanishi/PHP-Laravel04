//PHP/Laravel 04 関数を理解しよう　課題

//1.
<?php

function sum($max) {
    $result = 2 * $max;
    
    return $result;
}

$result = sum(2);
echo $result;

?>

//2.
<?php

function f($a, $b){
    $result = $a + $b;
    
    return  $result;
}

echo f(5, 4);

?>

//3.
<?php

function sum($arr) {
    $result = 1;
    foreach($arr as $arry) {
        $result *=$arry;
        
    }
    return $result;
}
echo sum(array(1, 3, 5 ,7, 9));
?>

//4.
<?php
function max_array($arr){
   
// とりあえず配列の最初の要素を一番大きい値とする
 $max_number = $arr[0];
 foreach($arr as $a){
  if($max_number < $a) {
      $max_number = $a;
  }
 }

 return $max_number;
 }
 
 echo max_array(array(1, 3, 5 ,7, 9));
 ?>
 
 //5.
 
 //strip_tags
 <?php
$string = '<a href="http://tech-boost.jp">techboost</a>';
$result = strip_tags($string);

echo $result;
 ?>
 
 //array_push
 <?php
$sports = ['basketball', 'football', 'baseball'];

array_push($sports, 'tennis', 'handball');

print_r($sports);
 ?>
 
 //array_push
 <?php
$array1 = [1, 9, 9, 7];
$array2 = [0, 7, 0, 3];
$array3 = [1, 1, 2, 0];

$array = array_merge($array1, $array2, $array3);

print_r($array);
 ?>
 
 // time mktime
 
 -time
 <?php
$timestamp = time();
 echo $timestamp;
 ?>
 
 -mktime
 <?php
$today = date('Y-m-d', mktime(0, 0, 0, 2, 4, 2020));
echo '$today = ' . $today;
 ?>
 
 //date
 <?php
echo date('Y/m/d');
 ?>