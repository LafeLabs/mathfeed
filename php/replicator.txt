<?php

    $url = "https://raw.githubusercontent.com/LafeLabs/mathfeed/master/json/dna.txt";
    $dnaraw = file_get_contents($url);
    $dna =json_decode($dnaraw);
    $baseurl = explode("json",$url)[0];

    mkdir("html");
    mkdir("php");
    mkdir("json");

    foreach($dna as $value){
        $data = file_get_contents($baseurl.$value);
        $file = fopen($value,"w");// create new file with this name
        fwrite($file,$data); //write data to file
        fclose($file);  //close file
    }
    
    $phpfiles = scandir("php/");

    foreach ($phpfiles as $value) {
        if($value != "." &&$value != ".."){
            $filebase = explode(".",$value)[0].".php";
            $code = file_get_contents("php/".$value);
            $file = fopen($filebase,"w");// create new file with     this name
            fwrite($file,$code); //write data to file
            fclose($file);  //close file      
    }
}
    
?>

<a href = "index.php" style = "font-size:5em;">START MATH FEED</a>
