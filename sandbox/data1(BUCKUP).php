<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=shift_jis">
<link rel="stylesheet" href="style.css"> 
<title>�r�W�l�X�Q�[���Q�O�P�P�@���x���P�@�ӎu���荀�ړ���</title>
</head>

<body>
<div id="container">
<div id="header">
<img src="logo.jpg">
</div>
<hr class="">
<div id="status1">
	  <p>�Q�Q����</p>
	  <p>��Q�Q���ł��B</p>
	  <p> �Q�Q��ڂ̃`�������W�ł��B </p>
  </div>
  <div id="status2"> 
    <p>�ӎv���荀��</p>
    <p>���݁Q�Q���̊���ł��B</p>
    <p>�d���Q�Q�̔����i�Q�Q��</p>
    <p>[����]</p>
    <p>[�ߋ��̃q�X�g��������]</p>
  </div>
<div id="status3">
�Q�Q�������@�ݎؑΏƕ\<br>
<table class="status">
  <tr>
    <td>����</td>
    <td>3400</td>
    <td>�ؓ���</td>
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
�Q�Q�������@���v�v�Z��<br />
<table class="status">
  <tr>
    <td>���㍂</td>
    <td>3400</td>
    <td>�Œ��p�Ȃ�</td>
    <td>3400</td>
  </tr>
  <tr>
    <td>�d����</td>
    <td>2000</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>�e���v</td>
    <td>1400</td>
    <td>���x�o</td>
    <td>3400</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>�����v</td>
    <td>0</td>
  </tr>
</table>
</div>
<?php
	$name = $_POST['name'];
	print("���O�́A$name �ł���B");
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
