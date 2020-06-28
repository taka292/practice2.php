<?php 
// echo "課題1:";
// function a($arg){
    
//     return $arg * 2;}
// echo a($arg);
// echo "\n";

// echo "課題2";
// function b($a, $b){
//     return $a + $b;
// } 
// echo b($a,$b);
// echo "\n";

echo "課題3:";
$array = [1, 3, 5 ,7, 9];
function c($array){
    $num = 1;
   foreach($array as $value) {
       $num *= $value;
   }
    return $num;
}
// $array = [1, 3, 5 ,7, 9];
echo c($array);
echo "\n";

echo "課題4:";
function max_array($arr) {
    // とりあえず配列の最初の要素を一番大きい値とする
    $max_number = $arr[0];
    
    foreach ($arr as $a) {
        //どうしたらいいかわからない・・・・
        if ($max_number < $a) {
           $max_number = $a;
        }
    }

    return $max_number;
}
 
 echo "課題5:";
$text = '<p>Test paragraph.</p><!-- Comment --> <h1>Other text</h1>';
echo strip_tags($text);
echo "\n";

$stack = array("orange,banana");
array_push($stack,"apple","lemon");
 print_r($stack) ;
 echo "\n";
 
 $array1 = array("color" => "red", 2, 4);
$array2 = array("a", "3", "color" => "green", "shape" => "trapezoid", 4);
$result = array_merge($array1, $array2);
print_r($result);
echo "\n";

echo '現在のUnixタイムスタンプ:' .time();
echo "\n";

$timestamp = mktime(0,0,0,12,7,1999);
echo $timestamp;
echo "\n";

date_default_timezone_set('Asia/Tokyo');
echo "現在の時刻は";
echo date("Y/m/d H:i:s");
?>