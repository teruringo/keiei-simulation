<?php
require("config.php");
extract($_GET, EXTR_PREFIX_ALL, "input");
header("Content-Type: text/html; charset=shift_jis");

//�f�[�^�̍s�����擾
$line_count = 0;

$fp = fopen(CSV_DATA_PATH, "r")
	or die("�G���[�F�t�@�C�����J���܂���");
while($row = fgetcsv($fp, 1024)){
	$line_count++;
}
fclose($fp);

if(CSV_USE_HEADER == TRUE){
	$line_count--;
}

//�\���J�n�s���v�Z
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

//�\��
print <<<_EOT_
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
	<p><b>
_EOT_;

$fp = fopen(CSV_DATA_PATH, "r")
	or die("�G���[�F�t�@�C�����J���܂���");
$row = fgetcsv($fp, 1024);
print "$row[0]";

print <<<_EOT_
	</b>����</p>
	<p>��<b>
_EOT_;

print "$row[1]";

print <<<_EOT_
	</b>���ł��B</p>
	<p><b>
_EOT_;

print "$row[2]";

print <<<_EOT_
	</b>��ڂ̃`�������W�ł��B </p>
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
</div>
</body>
</html>
_EOT_;
?>