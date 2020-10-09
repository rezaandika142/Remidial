<?php

$game = [
    [" TENCENT","PUBG",1],
    [" MOONTON","MOBILE LEGEND",2],
    [" GARENA","CODM",3],
    [" GARENA","FREE FIRE",4],
    [" TENCENT","AOV",5],
    [" TENCENT","CROS FIRE",6],
    [" SUPERCELL","CLASH OF CLANS",7],
    [" SUPERCELL","CLASH ROYALE",8],
    [" MOONTON","SCS.io",9]
  
  ];
  
  $temp_arr=[];

foreach ($game as $key) {
  $temp_arr[]=$key[0];
}

$pilihan=array_unique($temp_arr);

  foreach ($pilihan as $key_x) {
    echo $key_x."\n";
}



?>