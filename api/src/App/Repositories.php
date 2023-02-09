<?php

declare(strict_types=1);

$container['products_repository'] = static function (Pimple\Container $container): App\Repository\ProductsRepository {
    return new App\Repository\ProductsRepository($container['db']);
};
