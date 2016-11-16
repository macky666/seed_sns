<?php 

  // $debug = true;
  // 定数を定義
  define('DEBUG',true);
  // こう定義すれば関数内で使える


  // echoの独自関数化
  // 1.UIに必要な表示をするため
  // 2.デバッグ用に変数の内容を表示するため
  function special_echo($val){
    if(DEBUG){
      echo $val;
      echo '<br>';
    }
  }

  special_echo('ほげ');
  special_echo('ふが');
  echo '普通のecho';
  echo '<br>';

// var_dumpの独自関数化
  function special_var_dump($val){
    if(DEBUG){
      echo '<pre>';
      var_dump($val);
      echo '</pre>';
    }
  }

  $ary = array('PHP','Ruby','C','Java','Python');
  special_var_dump($ary);
  var_dump($ary);




 ?>