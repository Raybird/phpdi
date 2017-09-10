<?php
namespace Raybird\TryDi;

use \DI\ContainerBuilder;
use \DI\Container;

class Main {

    /** Container */
    private $container;

    private static $instance;

    public static function getInstance(){
        if(self::$instance == null){
            self::$instance = new self();
        }
        return self::$instance;
    } 

    public function getContainer(){
        return $this->container;
    }

    private function __construct(){
        $builder = new ContainerBuilder();
        $this->container = $builder->build();
    }
}