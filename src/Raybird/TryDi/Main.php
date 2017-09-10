<?php
namespace Raybird\TryDi;

use \DI\ContainerBuilder;
use \DI\Container;

class Main {

    /** Container */
    private $container;

    private static $instance;

    private static $diPath;

    public static function init($diPath){
        self::$diPath = $diPath;
    }

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
        $containerBuilder = new ContainerBuilder();

        if(self::$diPath != null && file_exists(self::$diPath)){
            $containerBuilder->addDefinitions(self::$diPath);
        }

        $containerBuilder->useAnnotations(true);
        $this->container = $containerBuilder->build();
    }
}