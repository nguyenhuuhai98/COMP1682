<?php
namespace App\Repositories\Product;

interface ProductRepositoryInterface
{
    public function getModel();
    public function getAllProductsPaginate($perPage);
    public function getRelatedProduct($id, $categoryId);
    public function getProductsByName($name, $category);
    public function getProductById($id);
    public function getProductsByArrayId(array $id);
}
