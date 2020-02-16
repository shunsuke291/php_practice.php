<?php
//a　という変数に3を、$b　という変数に７を代入して、echoを使って$a+$bの結果を表示してみましょう。
$a = 3;
$b = 7;
echo $a + $b;
echo "\n";
 
 //$array_month という配列に1月〜12月の文字列を代入し、echoで8月を表示してみましょう。
 $all_commands = array("1月", "2月", "3月", "4月", "5月", "6月", "7月", "8月","9月", "10月","11月","12月");
 $all_commands = ["1月", "2月", "3月", "4月", "5月", "6月", "7月", "8月","9月", "10月","11月","12月"];
 echo $all_commands[7];
 echo "\n" ;
 
 //$hello　という変数に　”Hello, “を $name という変数にあなたの名前を、　
//$world という変数に　”‘s World!” を代入して、各変数を連結させて “Hello, あなたの名前’s World!” と表示してみましょう。
 
 $hello = "hello, ";
 $name = "kitajima";
 $world = "‘s World";
 echo  $hello,$name ,$world;
// echo"\n";
 
 //$tech_boostに “tech “という文字列が代入されています。複合演算を使って、echo $tech_boostと実行すると「tech boost」と表示されるように実装してみましょう。
 $tech_boost = 'tech';
 $tech_boost= 'boost';
 echo $tech_boost,PHP_EOL;
 echo "\n";
 
//【応用】次のプログラムにはバグがあります。どこにバグが有るか調べて修正してみましょう。(バグは一つとは限りません。)
 $_calendar = array(
  "January" => "1月",
  "February" => "2月",
  "March" => "3月",
  "April" => "4月",
  "May" => "5月",
  "June" => "6月",
  "July" => "7月",
  "August" => "8月",
  "September" => "9月",
  "October" => "10月",
  "November" => "11月",
  "December" => "12月",
);

//name にあなたの名前を代入し、 if文で $name があなたの名前だったら 「私は あなたの名前 です」、
//もし違ったら「あなたの名前ではありません」と表示するように実装してください。

//if ($a > $b)
//echo "aはbより大きい";
$name = "kitajima";
if ($name == "kitajima") {
  echo "私はkitajimaです";
} else {
  echo "あなたの名前ではありません";
}
echo "\n";
  
  
  //for文を使って、1から10000までの合計の値を表示してください。

for ($a = 1; $a <= 1000 ; $a++) {
        echo $a;
        
        // $sum += $input_line[$a];    
    
}
//echo "\n";
//$fruits に配列で好きなフルーツを5個代入し、foreach文で順番に出力してください。
$fruits = array ("りんご","イチゴ","ばなな","りんご","みかん");
 
foreach ($fruits as $value){
 echo $value;
  echo "\n";

}
echo "\n";
// 次のプログラムのバグを修正し、1から100までの間で5の倍数のみ表示するようにしてみてください。
/* for文の始めの値を定義する */
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for($i = $start; $i <= $end; $i++) {

  // 5で割り切れたら{}内を実行する
  if ($i % 5 == 0) {
  
    echo $i;
    echo "\n";
  }
}
