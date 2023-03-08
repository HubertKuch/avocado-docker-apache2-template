<?php

require "vendor/autoload.php";

use Avocado\Application\Application;
use Avocado\Application\RestController;
use Avocado\AvocadoApplication\Attributes\Avocado;
use Avocado\AvocadoApplication\Attributes\PropertiesSource;
use Avocado\AvocadoApplication\Mappings\Produces;
use Avocado\HTTP\ContentType;
use AvocadoApplication\Mappings\GetMapping;

// #[Avocado] declares main class
#[Avocado]
// #[RestController] annotates that class as rest controller mappings containers
#[RestController]
class DemoApplication {

    public static function run(): void {
        Application::run(__DIR__);
    }

    // route at http://localhost/
    #[GetMapping("/")]
    public function hello(): array {
        return ["Hello world"];
    }
}

DemoApplication::run();
