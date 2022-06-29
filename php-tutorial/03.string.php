<?php
$str ="this this say";
echo $str . "<br>";
$len = strlen("$str");
echo "the length of this string is ". $len . " .thank you <br>";
echo "the number of words in this string is ".str_word_count($str) .". Thank you<br>";

echo "the reversed string is ".strrev($str) .". Thank you <br>";

echo "the search for is in this position is ". strpos($str, "is") .". thank you <br>";

echo "the replaced string is ".str_replace("is", "at" , $str) .". Thank you <br>";

?>