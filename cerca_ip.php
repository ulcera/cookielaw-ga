<?php
  $ret = array('res'=>false);
  $myip = $_SERVER['REMOTE_ADDR'];
  $ips = explode('.', $myip);
  $ip = gethostbyname('myhostname'); 
  $first_number_ip = xx;
  $second_number_ip = xx;
  //it's no my ip ->ok ->print analytics code
  if(($ips[0]!= $first_number_ip|| $ips[1]!=$second_number_ip) && $myip!= $ip)
  {
  	$ret['res']=true;
  }
  echo json_encode($ret);
?>
