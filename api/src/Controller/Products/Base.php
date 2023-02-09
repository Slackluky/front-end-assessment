<?php

declare(strict_types=1);

namespace App\Controller\Products;

use App\Service\ProductsService;
use Pimple\Psr11\Container;

abstract class Base
{
    protected Container $container;

    public function __construct(Container $container)
    {
        $this->container = $container;
    }

    protected function getProductsService(): ProductsService
    {
        return $this->container->get('products_service');
    }
}
