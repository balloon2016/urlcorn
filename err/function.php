<?php 
	function saveFile($addr, $code) {
		$ch=fopen($addr, "w");
		fwrite($ch, $code);
		fclose($ch);
	}
	function read_file($addr) {
		if(file_exists($addr)) 
			return file_get_contents($addr);
		return '';
	}
 ?>