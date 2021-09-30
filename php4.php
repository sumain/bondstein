<?php 
$file= "php4.txt"; 
$content = file_get_contents('php4.txt'); 
print_r($content);

$content = @fopen($file, "r");
if ($content) {
    while (($buffer = fgets($content, 4096)) !== false) {
        echo $buffer;
    }
    if (!feof($content)) {
        echo "Error: unexpected fgets() fail\n";
    }
    fclose($content);
}

?>