<!DOCTYPE html>
<?php

$dir    = './tours';
$tours = scandir($dir, 1);
$tours = array_diff($tours, array('..', '.'));
print_r($tours);

?>
