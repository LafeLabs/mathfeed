<?php

$finalstring = "[\n";

$finalstring .= "\"html/feed.txt\",\n";
$finalstring .= "\"json/dna.txt\",\n";

$phpfiles = scandir(getcwd()."/php");

foreach($phpfiles as $value){
    if($value != "." && $value != ".."){
        $finalstring .= "\"php/".$value."\",\n";
    }
}
$finalstring = rtrim($finalstring, ",\n");
$finalstring .= "\n]";

echo $finalstring;

$file = fopen("json/dna.txt","w");// create new file with this name
fwrite($file,$finalstring); //write data to file
fclose($file);  //close file

?>
<a href = "editor.php">editor.php</a>