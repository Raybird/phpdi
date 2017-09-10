<?php
require __DIR__."/../vendor/autoload.php";

$main = Raybird\TryDi\Main::getInstance();

$container = $main->getContainer();

$a = $container->get(\Raybird\TryDi\Plan\APlan::class);

echo "<pre>";
var_dump($a);
echo "</pre>";