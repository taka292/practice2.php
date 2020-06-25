<?php 

echo "課題1:";

$name = "池田多香緒";
if ($name = "池田多香緒")  {
  echo "私の名前は${name}です";
}else {
    echo "あなたの名前ではありません";
  }
echo "\n";
echo "課題2:";

$total = 0;
for($i=0; $i <=10000; $i++) {
  
  $total += $i;
}
echo $total;
echo "\n";

echo "課題3:";
echo "\n";

$fruits = array("apple", "orange", "banana", "lemon", "grape");
foreach($fruits as $fruit){
  echo $fruit;
  echo "\n";
}

echo "課題4:";
echo "\n";
/* for文の始めの値を定義する */
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for($i = $start; $i <= $end; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 === 0){
    echo $i;
    echo "\n";
  }
}