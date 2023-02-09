<?php

declare(strict_types=1);

namespace App\Controller\Products;

use App\CustomResponse as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Fig\Http\Message\StatusCodeInterface;

final class Create extends Base
{
    public function __invoke(Request $request, Response $response): Response
    {
        $input = (array) $request->getParsedBody();
        $products = $this->getProductsService()->create($input);

        return $response->withJson($products, StatusCodeInterface::STATUS_CREATED);
    }
}
