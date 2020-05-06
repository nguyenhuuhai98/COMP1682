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

    public function getAllProductsPaginate($perPage)
    {
        return $this->model->orderBy('id', 'DESC')->paginate($perPage);
    }

    public function getRelatedProduct($id, $categoryId)
    {
        return $this->model->whereNotIn('id', [$id])->where('category_id', $categoryId)->get();
    }

    public function getProductsByName($name, $category)
    {
        if ($category) {
            return $this->model->where('name', 'like', '%' . $name . '%')->where('category_id', $category);
        } else {
            return $this->model->where('name', 'like', '%' . $name . '%');
        }
    }

    public function getProductById($id)
    {
        return $this->model->where('id', $id)->with('category')->first();
    }
}
