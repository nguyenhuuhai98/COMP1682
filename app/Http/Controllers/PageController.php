<?php

namespace App\Http\Controllers;

use App\Repositories\Category\CategoryRepositoryInterface;
use App\Repositories\Product\ProductRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class PageController extends Controller
{
    protected $categoryRepository;
    protected $productRepository;

    public function __construct(
        CategoryRepositoryInterface $categoryRepository,
        ProductRepositoryInterface $productRepository
    ) {
        $this->categoryRepository = $categoryRepository;
        $this->productRepository = $productRepository;
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

    public function getProductsByCategory($id, Request $request)
    {
        if (!$request->page) {
            $page = 1;
        } else {
            $page = $request->page;
        }
        $products = [];
        $category = $this->categoryRepository->find($id);
        $categories = $this->categoryRepository->getCategoryByParentId($id);
        if (count($categories) > 0) {
            foreach ($categories as $key => $cate) {
                if (count($cate->categories) > 0) {
                    foreach ($cate->categories as $cat) {
                        $products = array_merge($products, $cat->products->toArray());
                    }
                } else {
                    $products = $cate->products;
                }
            }
        } else {
            $products = $category->products;
        }
        $prods = new LengthAwarePaginator(
            collect($products)->forPage($page, 12),
            count($products),
            12,
            $page,
            [
                'path' => url('/products/'. $id . '/'),
                'pageName' => 'page',
            ]
        );

        return view('pages.products', [
            'category' => $category,
            'categories' => $categories,
            'products' => $prods,
        ]);
    }

    public function getProductById($id)
    {
        $product = $this->productRepository->getProductById($id);
        $relatedProducts = $this->productRepository->getRelatedProduct($id, $product->category_id);
        if (count($relatedProducts) > 10) {
            $relatedProducts = $relatedProducts->random(10);
        } else {
            $relatedProducts = $relatedProducts->shuffle();
        }

        return view('pages.product', [
            'category' => $product->category,
            'product' => $product,
            'relatedProducts' => $relatedProducts,
        ]);
    }

    public function getAllProducts()
    {
        $products = $this->productRepository->getAllProductsPaginate(12);
        $categories = $this->categoryRepository->getCategoryByParentId(0);

        return view('pages.products', [
            'products' => $products,
            'categories' => $categories,
        ]);
    }

    public function searchProducts(Request $request)
    {
        $products = $this->productRepository->getProductsByName($request->name, $request->category)->get();

        return view('pages.products.search-product', compact('products'));
    }

    public function recentlyViewProducts(Request $request)
    {
        try {
            $products = [];
            foreach ($request->id as $key => $id) {
                $products[$key] = $this->productRepository->getProductById($id);
            }
            $html = view('pages.components.viewed-product', ['products' => $products])->render();

            return response()->json($html);
        } catch (\Exception $ex) {
            report($ex);

            return $ex;
        }
    }
}
