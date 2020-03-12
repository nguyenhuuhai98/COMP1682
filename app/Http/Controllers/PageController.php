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
            $f1Categories = $this->getAllCategories();

            return view('pages.index', [
                'f1Categories' => $f1Categories
            ]);
        } catch (\Exception $ex) {
            report($ex);
            dd($ex);
            return $ex;
        }
    }

    public function getAllCategories()
    {
        $categories = $this->categoryRepository->getCategoryWhereIn();

        return $categories;
    }
}
