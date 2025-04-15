<?php

    $file = fopen("Introduction.txt", "r") or exit("Unable to open file!");
  
    while(!feof($file))
    {
        echo fgets($file). "<br>";
    }
    fclose($file);
echo "Program by Aryan(0221BCA161)";
?>
