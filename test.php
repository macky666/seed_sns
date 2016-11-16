<?php
// sprintf関数
$str = sprintf('私は%sな%sです。','なりたて','プログラマ');
echo $str;

$sql = sprintf('INSERT INTO `members` SET `nick_name`="%s",`email`="%s",`password`="%s"',"nexseed","nex@seed.net","hogehoge");

echo $sql;

?>