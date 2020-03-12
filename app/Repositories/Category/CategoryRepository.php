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

    public function getCategoryWhereIn()
    {
        $parentId = [1, 2, 3, 4, 5];

        return $this->_model->whereIn('parent_id', $parentId)->get();
    }

}
