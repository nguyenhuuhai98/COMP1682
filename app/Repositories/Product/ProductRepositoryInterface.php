<?php
namespace App\Repositories\Product;

interface ProductRepositoryInterface
{
    public function getModel();
    public function getAllProductsPaginate($perPage);
}
