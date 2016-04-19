<?php

  include($path.'config/config.php');
  include($path.'class/PHPTelnet.php');


  function l2s($ap_list){
    #Change lightweight to atand alone
    $command_l2s = file_get_contents('./command/l2s.txt');
    $command_l2s = convert_command($command_l2s);
    foreach ($ap_list as $ip) {
        //command_exec($ip, $user, $pass, $command_l2s);
        echo 'Change lightweight to stand alone : '.$ip.PHP_EOL;
    }
    echo PHP_EOL.'wait 10 minute .....'.PHP_EOL;
    sleep(600); // 10 second
    $command_confs = file_get_contents('./command/confs.txt');
    $command_confs = convert_command($command_confs);
     foreach ($ap_list as $ip) {
        //command_exec($ip, $user, $pass, $command_confs);
        echo ' send config l2s command to IP :'.$ip.PHP_EOL;
    }
  }
  
  function s2l($ap_list){
    #Change stand alone to lightweight
    $command_s2l = file_get_contents('./command/s2l.txt');
    $command_s2l = convert_command($command_s2l);  
    foreach ($ap_list as $ip) {
        //command_exec($ip, $user, $pass, $command_s2l);
        echo 'Change stand alone to lightweight : '.$ip.PHP_EOL;
      }
      echo PHP_EOL;
    }
  
   function command_exec($ip,$user,$pass,$command){
      $telnet = new PHPTelnet();
      $result = $telnet->Connect($ip, $user, $pass);
       if ($result == 0) { 
          $telnet->DoCommand($command, $out);
          echo $out."\n";
          $telnet->Disconnect(); 
       }
    }

  function convert_command($command_text){
    $command = str_replace(PHP_EOL,'\n',$command_text);
    return $command;
   }
  
 function pingAddress($ip) {
    $output = shell_exec('ping -c1 -t1 '.$ip);
    preg_match_all('/icmp_seq=/',$output,$match);
    if(count($match[0])==1){
      return 1;
    }
    else {
      return 0;
    }
   }
?>