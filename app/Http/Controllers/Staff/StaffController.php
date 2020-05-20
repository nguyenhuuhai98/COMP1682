<?php

namespace App\Http\Controllers\Staff;

use App\Http\Controllers\Controller;
use App\Repositories\Category\CategoryRepositoryInterface;
use App\Repositories\Product\ProductRepositoryInterface;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    protected $productRepository;
    protected $categoryRepository;

    public function __construct(
        ProductRepositoryInterface $productRepository,
        CategoryRepositoryInterface $categoryRepository
    ) {
        $this->middleware('auth');
        $this->productRepository = $productRepository;
        $this->categoryRepository = $categoryRepository;
    }

    public function index()
    {
        $products = $this->productRepository->getAll();
        $categories = $this->categoryRepository->getAll();

        return view('staff.pages.index', [
            'products' => $products,
            'categories' => $categories,
        ]);
    }

    public function updateDiscountProducts(Request $request)
    {
        $products = [];
        foreach ($request->products as $key => $id) {
            $product = $this->productRepository->find($id);
            $product->discount = $request->discount;
            $product->sale_price = $product->price - ($product->price * $request->discount / 100);
            $product->save();
            $products[$key] = $product;
            dd($products);
        }
        return response()->json($products);
    }
}
