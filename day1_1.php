<?php
$file = fopen("day1.txt", "r");
$floors = fgets($file);
fclose($file);

$down = substr_count($floors, '(');
$up = substr_count($floors, ')');

echo ($down - $up) . "\n";

