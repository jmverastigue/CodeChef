<?php
  ini_set("precision",158);
  function getInput($length=255){
    $fr=fopen("php://stdin","r");
    $input = fgets($fr,$length);
    $input = rtrim($input);
    fclose ($fr);
    return $input;
  }
  $text = getInput(10);
  $myarray = explode(" ",$text);
  $value = ($myarray[1]-$myarray[0])-0.5;
  if($value < 0 || $myarray[0]%5 != 0){
    printf("%1\$.2f",$myarray[1]);
  }else{
    printf("%1\$.2f",$value);
  }
?> 