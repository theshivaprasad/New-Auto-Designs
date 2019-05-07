<?php
$directory = '/public_html/testfolder/';
if ($handle = opendir($directory)) { 
    while (false !== ($fileName = readdir($handle))) {     
        $newName = str_replace(".php",".html",$fileName);
        rename($directory . $fileName, $directory . $newName);
    } 
    closedir($handle);
}

?>