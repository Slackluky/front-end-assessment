<?php

declare(strict_types=1);

$container['products_service'] = static function (Pimple\Container $container): App\Service\ProductsService {
    return new App\Service\ProductsService($container['products_repository']);
};
