<?php
function printpattern23($rows){
  $num=1;
  $char='a';
  for($i=1;$i<=$rows;$i++){
      
    for($j=1;$j<=$i;$j++){
      if($i%2==1){
        echo $num;
        $num++;
      }
      else{
        echo $char;
        $char++;
      }
    }
    echo "\n";
  }
}

printpattern23(5);
?>
