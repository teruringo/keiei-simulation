<?php
	if(ereg("config.php", $_SERVER['PHP_SELF'])){
		exit();
	}
	
	//csv�t�@�C���ւ̃p�X
	define("CSV_DATA_PATH", "csvdata01.csv");
	
	//��s�ڂ��w�b�_�Ƃ݂Ȃ����ǂ���
	define("CSV_USE_HEADER", TRUE);
	
	//��y�[�W�ɕ\������s��
	define("CSV_DATA_LIMIT", 10);
	
	//����������
	define("CSV_CAT_SIZE", 64);
	define("CSV_FUNC_SIZE", 64);
	define("CSV_DESC_SIZE", 255);
?>