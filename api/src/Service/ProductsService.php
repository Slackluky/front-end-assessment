<?php

declare(strict_types=1);

namespace App\Service;

use App\Exception\ProductsException;
use App\Repository\ProductsRepository;

final class ProductsService
{
    private ProductsRepository $productsRepository;

    public function __construct(ProductsRepository $productsRepository)
    {
        $this->productsRepository = $productsRepository;
    }

    public function checkAndGet(int $productsId): object
    {
        return $this->productsRepository->checkAndGet($productsId);
    }

    public function getAll(): array
    {
        return $this->productsRepository->getAll();
    }

    public function getOne(int $productsId): object
    {
        return $this->checkAndGet($productsId);
    }

    public function create(array $input): object
    {
        $products = json_decode((string) json_encode($input), false);

        return $this->productsRepository->create($products);
    }

    public function update(array $input, int $productsId): object
    {
        $products = $this->checkAndGet($productsId);
        $data = json_decode((string) json_encode($input), false);

        return $this->productsRepository->update($products, $data);
    }

    public function delete(int $productsId): void
    {
        $this->checkAndGet($productsId);
        $this->productsRepository->delete($productsId);
    }
}
