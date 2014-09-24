<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
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
	  <p>＿＿さん</p>
	  <p>第＿＿期です。</p>
	  <p> ＿＿回目のチャレンジです。 </p>
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
<?php
	$name = $_POST['name'];
	print("名前は、$name ですん。");
	$fp = fopen("csvdata01.csv","r") or die(); 
	while ($row = fgetcsv($fp, 1024)){
		foreach ($row as $column){
			print $column . "\n";
		}
	}
	fclose($fp);
?>
</div>
</body>
</html>
