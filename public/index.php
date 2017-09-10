<?php
require __DIR__."/../vendor/autoload.php";

\Raybird\TryDi\Main::init(__DIR__."/di.php");

$main = Raybird\TryDi\Main::getInstance();

$container = $main->getContainer();

$a = $container->get(\Raybird\TryDi\Plan\APlan::class);

echo "<pre>";
var_dump($a);
echo "</pre>";

$user = $container->get("param.user");
echo "<pre>";
var_dump($user);
echo "</pre>";

$inject = $container->get(\Raybird\TryDi\Annotation\InjectClass::class);
echo "<pre>";
var_dump($inject);
echo "</pre>";

