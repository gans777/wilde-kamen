<?php 
if ($_POST['label']=='save_main_info') {
	$current=$_POST['data_save'];
	$path = '../photos/'.$_POST['directory'].'/data.txt';
	file_put_contents($path, $current);
}
?>