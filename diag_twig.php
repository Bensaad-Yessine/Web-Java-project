<?php
require 'vendor/autoload.php';

use Twig\Environment;
use Twig\Loader\FilesystemLoader;
use Twig\Source;

$loader = new FilesystemLoader('templates');
$twig = new Environment($loader);

try {
    $templatePath = 'matiere_classe/index.html.twig';
    $source = new Source(file_get_contents('templates/' . $templatePath), $templatePath);
    $twig->tokenize($source);
    echo "Tokenization OK\n";
    $twig->compileSource($source);
    echo "Compilation OK\n";
} catch (\Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
    if (method_exists($e, 'getSourceContext') && $e->getSourceContext()) {
         echo "File: " . $e->getSourceContext()->getPath() . "\n";
         echo "Line: " . $e->getTemplateLine() . "\n";
    }
}
