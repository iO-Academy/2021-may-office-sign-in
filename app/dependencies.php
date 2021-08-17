<?php
declare(strict_types=1);

use DI\ContainerBuilder;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use Monolog\Processor\UidProcessor;
use Psr\Container\ContainerInterface;
use Psr\Log\LoggerInterface;
use Slim\Views\PhpRenderer;

return function (ContainerBuilder $containerBuilder) {
    $container = [];

    $container[LoggerInterface::class] = function (ContainerInterface $c) {
        $settings = $c->get('settings');

        $loggerSettings = $settings['logger'];
        $logger = new Logger($loggerSettings['name']);

        $processor = new UidProcessor();
        $logger->pushProcessor($processor);

        $handler = new StreamHandler($loggerSettings['path'], $loggerSettings['level']);
        $logger->pushHandler($handler);

        return $logger;
    };

    $container['renderer'] = function (ContainerInterface $c) {
        $settings = $c->get('settings')['renderer'];
        $renderer = new PhpRenderer($settings['template_path']);
        return $renderer;
    };

    $container['dbConnection'] = function (ContainerInterface $c) {
        $settings = $c->get('settings')['db'];
        $db = new PDO($settings['host'] . $settings['dbName'], $settings['userName'], $settings['password']);
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_ASSOC);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // uncomment to debug DB errors
        return $db;
    };

    $container['VisitorModel'] =
        DI\factory(\App\Factories\Model\VisitorModelFactory::class);
    $container['HomePageController'] =
        DI\factory('\App\Factories\Controllers\HomePageControllerFactory');
    $container['AddVisitorController'] =
        DI\factory('\App\Factories\Controllers\AddVisitorControllerFactory');
    $container['AdminPageController'] =
        DI\factory('\App\Factories\Controllers\AdminPageControllerFactory');
    $container['AddVisitorFormController'] =
        DI\factory('\App\Factories\Controllers\AddVisitorFormControllerFactory');

    $containerBuilder->addDefinitions($container);
};
