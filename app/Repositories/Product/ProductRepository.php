<?php
namespace App\Repositories\Product;

use App\Repositories\EloquentRepository;
use App\Models\Product;

class ProductRepository extends EloquentRepository implements ProductRepositoryInterface
{

    public function getModel()
    {
        return Product::class;
    }

    public function getAllProductsPaginate()
    {
        return $this->model->paginate(9);
    }
}
