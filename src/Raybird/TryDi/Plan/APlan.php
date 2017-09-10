<?php
namespace Raybird\TryDi\Plan;

use DI\Container;

class APlan{

    private $container;

    public function __construct(Container $container){
        $this->container = $container;
    }

}