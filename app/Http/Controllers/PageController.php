<?php

namespace App\Http\Controllers;

use App\Repositories\Category\CategoryRepositoryInterface;
use Illuminate\Http\Request;

class PageController extends Controller
{
    protected $categoryRepository;

    public function __construct(CategoryRepositoryInterface $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function index()
    {
        try {
            $parentId = [1, 2, 3, 4, 5];
            $categories = $this->categoryRepository->getAll();
            $f1Categories = $this->getAllCategories($parentId);
            $f0Categories = $this->getAllCategories([0]);
            $randomCategories = $f1Categories->random(5);
            return view('pages.index', [
                'categories' => $categories,
                'f0Categories' => $f0Categories,
                'f1Categories' => $f1Categories,
                'randomCategories' => $randomCategories,
            ]);
        } catch (\Exception $ex) {
            report($ex);

            return $ex;
        }
    }

    public function getAllCategories($parentId)
    {
        $categories = $this->categoryRepository->getCategoryWhereIn($parentId);

        return $categories;
    }
}
