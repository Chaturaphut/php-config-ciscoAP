<?php
	include('function.php');
	
	#protect crontab interupt
	if(file_exists($path.'status/cron.pid')){
		echo 'crontab running exise process please remove /status/cron.pid';
		exit();
	}
	
	file_put_contents($path.'status/cron.pid','1');
	$check = file_get_contents($path.'status/apStatus.txt');
	
	if(pingAddress($controller_host)){
		if($check == '9'){
			//welcome back AP
			echo 'Welcome back AP send command Stand Alone to lightweight. '.PHP_EOL;
			s2l($ap_list);
		}
		file_put_contents($path.'status/apStatus.txt','1');
	}
	else if($check!='9'){
		file_put_contents($path.'status/apStatus.txt','0',FILE_APPEND);
	}
	
	if($check=='100000'){
		// AP Down change to stand alone mode 
		l2s($ap_list);
		echo 'Send Command L2s + config S success !';
		file_put_contents($path.'status/apStatus.txt','9');
	}
	
	#delete crontab check
	unlink($path.'status/cron.pid');
?>