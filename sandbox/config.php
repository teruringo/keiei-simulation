<?php
	if(ereg("config.php", $_SERVER['PHP_SELF'])){
		exit();
	}
	
	//csvファイルへのパス
	define("CSV_DATA_PATH", "csvdata01.csv");
	
	//一行目をヘッダとみなすかどうか
	define("CSV_USE_HEADER", TRUE);
	
	//一ページに表示する行数
	define("CSV_DATA_LIMIT", 10);
	
	//文字数制限
	define("CSV_CAT_SIZE", 64);
	define("CSV_FUNC_SIZE", 64);
	define("CSV_DESC_SIZE", 255);
?>