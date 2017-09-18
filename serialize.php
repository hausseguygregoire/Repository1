<?php
echo : 't'as intérêt a t'afficher';

$tab['name'] = 'neymar au PSG';
$tab['id'] = 5;
var_dump($tab);
$ser = serialize($tab);
var_dump($ser);
// $test = unserialize($ser);
var_dump($test);
$ser_b64 =  base64_encode($ser);
var_dump($ser_b64);
echo '<hr>';
$ser_b64decode =  base64_decode($ser_b64);
var_dump($ser_b64decode);
$test = unserialize($ser_b64decode);
var_dump($test);

echo : ' tout va bien';
?>
