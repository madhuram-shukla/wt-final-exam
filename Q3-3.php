<?php
$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = "Hi, I am Madhuram Shukla, A057, from batch 3 & currently pursuing MCA from MPSTME\n";
fwrite($myfile, $txt);
fclose($myfile);
?>