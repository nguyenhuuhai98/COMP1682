<?php
namespace App\Repositories\Category;

interface CategoryRepositoryInterface
{
    public function getModel();

    public function getCategoryWhereIn($parentId);

    public function getAllCategoriesDESC();

    public function getCategoryByParentId($parentId);
}
