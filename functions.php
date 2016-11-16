<?php 
  // 関数の定義
  function hello(){
    echo 'hello';
    echo '<br>';

  }

  // 関数の実行
  hello();

// 練習問題１
  function nexseed(){
  echo 'seedくん';
  echo '<br>';
}

  nexseed();
  nexseed();
  nexseed();
  nexseed();
  nexseed();

  // 引数
  function aisatsu($name){
  echo '初めまして、' . $name . 'さん！';
  echo '<br>';
  echo 'お元気ですか？';
  echo '<br>';
}
    // 関数の外で引数を使うことはできない

  aisatsu('太郎');
  aisatsu('花子');

  // 練習問題３
  function nexseed2($greeting){
    echo $greeting.'、seedくん';
    echo '<br>';

  }

  nexseed2('こんにちは');
  nexseed2('Good Evening');

  // 複数の引数
  function plus($num1, $num2) {
  $result = $num1 + $num2;
  echo '合計は' . $result . 'です。';
   echo '<br>';
}

  // 関数の呼び出し
  plus(10, 5);

  // 練習問題４
  function nexseed3($greeting,$name){
    echo $greeting.'、'.$name.'くん';
    echo '<br>';
  }
  nexseed3('こんばんは','マッチ');


    // // 四則演算関数
    // function calc($num1,$num2,$s){
    //   if($s == +){

    // }elseif($s == -){

    // }

    // calc(10,5,+);


    //練習問題５
  function nexseed4($greeting,$name){
     return $greeting.'、'.$name.'くん';
  }

  echo nexseed4('こんばんは','マッチ');
  echo '<br>';

  
    // 演習問題１
    function multiplication($sum1,$sum2){
      return $sum1 + $sum2;

    }

    echo multiplication(3,11);
    echo '<br>';

    // 演習問題２
    function average($a,$b){
      $sum = $a + $b;
      if($sum / 2 >= 10){
        echo $sum;
      }elseif($sum / 2 < 9){
        echo 0;
      }
    }
    average(3,7);
    echo '<br>';

    // 演習問題３
    function shopping($money,$price){
      $spare = $money - $price;
      if($money > $price){
        echo $spare;
      }
    }
    shopping(10000,3000);
    echo '<br>';

    // 演習問題４
    function keisan($num1,$num2){
      if ($num1 >= $num2) {
        echo $num1;
      } else {
        echo $num2;
      }
    }
    keisan(3,9);

 ?>