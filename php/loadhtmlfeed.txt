<?php
$htmllist = explode(",",file_get_contents("html/list.txt"));

foreach($htmllist as $value){
  if($value != null && strlen($value) > 3){
      echo "<feedbox>";
      echo file_get_contents("html/".$value);
      echo "</feedbox>";
  }  
}

?>