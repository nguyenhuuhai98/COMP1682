<?php
namespace App\Repositories\Category;

use App\Repositories\EloquentRepository;
use App\Models\Category;

class CategoryRepository extends EloquentRepository implements CategoryRepositoryInterface
{

    public function getModel()
    {
        return Category::class;
    }

    public function getCategoryWhereIn($parentId)
    {
        return $this->model->whereIn('parent_id', $parentId)->get();
    }

    public function getAllCategoriesDESC()
    {
        return $this->model->whereNull('deleted_at')->orderBy('id')->get();
    }

    public function getCategoryByParentId($parentId)
    {
        return $this->model->where('parent_id', $parentId)->with('categories')->get();
    }
}
