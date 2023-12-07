<?php    
$filename = "c:\\file1.txt";    
$fp = fopen($filename, "r");//open file in read mode    
  
$contents = fread($fp, filesize($filename));//read file    
  
echo "<pre>$contents</pre>";//printing data of file  
fclose($fp);//close file    
?>    