<?php
$loremIpsum = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum viverra ante at magna malesuada tincidunt. Sed quis pharetra risus, non tempor sem. Nulla facilisi. Vivamus molestie turpis a sem gravida elementum. Curabitur sed sagittis eros.";

echo "<p>{$loremIpsum}</p>";
echo "Panjang karakter: " . strlen($loremIpsum) . "<br>";
echo "Panjang kata: " . str_word_count($loremIpsum) . "<br>";
echo "<p>" . strtoupper($loremIpsum) . "</p>";
echo "<p>" . strtolower($loremIpsum) . "</p>";
?>