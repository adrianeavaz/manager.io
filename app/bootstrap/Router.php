<?php
/**
 * Created by PhpStorm.
 * User: adrian
 * Date: 28.11.2015
 * Time: 21:38
 */

namespace app\bootstrap;

use Phalcon\Mvc\Router as PhRouter;

class Router extends PhRouter
{
    public function __construct($defaultRoutes = true)
    {
        parent::__construct($defaultRoutes);

        $this->addDefaultModules();
        $this->addRoutes();
    }

    /**
     * add default path for modules so that they can be accessed using /module
     */
    public function addDefaultModules()
    {
        $routes = require(__DIR__ . '/config/defaults.php');
        if ($routes === null || empty($routes)) {
            return;
        }

        foreach ($routes as $path => $options) {
            $this->add($path, $options);
        }
    }

    /**
     * add route collection
     */
    public function addRoutes()
    {
        $routes = require(__DIR__ . '/config/routes.php');
        if ($routes === null || empty($routes)) {
            return;
        }

        foreach ($routes as $className) {
            $this->mount(new $className());
        }
    }
}