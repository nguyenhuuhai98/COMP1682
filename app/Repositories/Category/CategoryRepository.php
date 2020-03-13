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

        return $this->_model->whereIn('parent_id', $parentId)->get();
    }

    public function getAllCategoriesDESC()
    {

        return $this->_model->orderBy('id', 'DESC');
    }

}
