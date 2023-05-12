<?php
// Writing to a file in php
echo "Welcome to write files in php";
// $fptr = fopen("MyFile2.txt", "w");
// fwrite($fptr, "This is the best on this planet. Please don't argue with me on this planet.\n");
// fwrite($fptr, "This is another content.\n");
// fwrite($fptr, "This is another content.");
// fclose($fptr);

// Appending to file in php
$fptr = fopen("MyFile2.txt", "a");
fwrite($fptr, "This is a being appended to the file.\n");
fclose($fptr);
?>