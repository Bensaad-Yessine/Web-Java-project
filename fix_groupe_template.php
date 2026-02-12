<?php
$file = 'templates/groupe_projet/index.html.twig';
$lines = file($file);

// Keep only the first 1012 lines (up to and including </html>)
$newContent = implode('', array_slice($lines, 0, 1012));

file_put_contents($file, $newContent);
echo "Successfully cleaned the file! Removed " . (count($lines) - 1012) . " duplicate lines.\n";
?>
