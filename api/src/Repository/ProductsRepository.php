<?php

declare(strict_types=1);

namespace App\Repository;

use App\Exception\ProductsException;

final class ProductsRepository
{
    private \PDO $database;

    public function __construct(\PDO $database)
    {
        $this->database = $database;
    }

    public function getDb(): \PDO
    {
        return $this->database;
    }

    public function checkAndGet(int $productsId): object
    {
        $query = 'SELECT * FROM `products` WHERE `id` = :id';
        $statement = $this->getDb()->prepare($query);
        $statement->bindParam('id', $productsId);
        $statement->execute();
        $products = $statement->fetchObject();
        if (! $products) {
            throw new ProductsException('Products not found.', 404);
        }

        return $products;
    }

    public function getAll(): array
    {
        $query = 'SELECT * FROM `products` ORDER BY `id`';
        $statement = $this->getDb()->prepare($query);
        $statement->execute();

        return (array) $statement->fetchAll();
    }

    public function create(object $products): object
    {
        //  finish the query
        $query = 'INSERT INTO `products` (`id`) VALUES (:id)';
        $statement = $this->getDb()->prepare($query);
        $statement->bindParam('id', $products->id);
        $statement->execute();

        return $this->checkAndGet((int) $this->getDb()->lastInsertId());
    }

    public function update(object $products, object $data): object
    {
        // your code here
    }

    public function delete(int $productsId): void
    {
        // your code here
    }
}
