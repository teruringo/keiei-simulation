<?php
require("config.php");
extract($_GET, EXTR_PREFIX_ALL, "input");
header("Content-Type: text/html; charset=shift_jis");

//データの行数を取得
$line_count = 0;

$fp = fopen(CSV_DATA_PATH, "r")
	or die("エラー：ファイルが開けません");
while($row = fgetcsv($fp, 1024)){
	$line_count++;
}
fclose($fp);

if(CSV_USE_HEADER == TRUE){
	$line_count--;
}

//表示開始行を計算
if(!$input_offset){
	$input_offset = 1;
}

$prev_offset = $input_offset - CSV_DATA_LIMIT;
if($prev_offset < 1){
	$prev_offset =1;
}

$next_offset = $input_offset + CSV_DATA_LIMIT;
if($next_offse > $line_count){
	$next_offse = $input_offset;
}

//表示
print <<<_EOT_
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=shift_jis">
<link rel="stylesheet" href="style.css"> 
<title>ビジネスゲーム２０１１　レベル１　意志決定項目入力</title>
</head>

<body>
<div id="container">
<div id="header">
<img src="logo.jpg">
</div>
<hr class="">
<div id="status1">
	<p><b>
_EOT_;

$fp = fopen(CSV_DATA_PATH, "r")
	or die("エラー：ファイルが開けません");
$row = fgetcsv($fp, 1024);
print "$row[0]";

print <<<_EOT_
	</b>さん</p>
	<p>第<b>
_EOT_;

print "$row[1]";

print <<<_EOT_
	</b>期です。</p>
	<p><b>
_EOT_;

print "$row[2]";

print <<<_EOT_
	</b>回目のチャレンジです。 </p>
  </div>
  <div id="status2"> 
    <p>意思決定項目</p>
    <p>現在＿＿期の期首です。</p>
    <p>仕入＿＿個販売価格＿＿個</p>
    <p>[決定]</p>
    <p>[過去のヒストリを見る]</p>
  </div>
<div id="status3">
＿＿期期末　貸借対照表<br>
<table class="status">
  <tr>
    <td>現金</td>
    <td>3400</td>
    <td>借入金</td>
    <td>3400</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>2000</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>1400</td>
    <td>&nbsp;</td>
    <td>3400</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>0</td>
  </tr>
</table>
<br />
</div>
<div id="status4">
＿＿期期末　損益計算書<br />
<table class="status">
  <tr>
    <td>売上高</td>
    <td>3400</td>
    <td>固定費用など</td>
    <td>3400</td>
  </tr>
  <tr>
    <td>仕入高</td>
    <td>2000</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>粗利益</td>
    <td>1400</td>
    <td>総支出</td>
    <td>3400</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>純利益</td>
    <td>0</td>
  </tr>
</table>
</div>
</div>
</body>
</html>
_EOT_;
?>