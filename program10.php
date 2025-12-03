<?php

$students= array("ciyana","beema","suhana","fathima");

echo "<h2>array Before Sorting:</h2>";
print_r($students);

echo "<br><br>";

asort($students);
echo "<h2>array After Ascending Sorting(asort):</h2>";
print_r($students);

echo "<br><br>";

arsort($students);
echo "<h2>array After Descending Sorting(arsort):</h2>";
print_r($students);

?>



