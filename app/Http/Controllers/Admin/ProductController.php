<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\Category\CategoryRepositoryInterface;
use App\Repositories\Product\ProductRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
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

        return view('admin.pages.product.products', [
            'products' => $products,
            'categories' => $categories,
        ]);
    }

    public function store(Request $request)
    {
        try {
            $product = $this->handleRequest($request);

            $product = $this->productRepository->create($product);

            return response()->json($product);
        } catch (\Exception $ex) {
            report($ex);

            return $ex;
        }
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

    public function handleRequest($request)
    {
        $categoryId = $request->category;
        $calculateUnit = $request->calculateUnit;
        $name = $request->name;
        $barcode = $request->barcode;
        $shortDescription = $request->shortDescription;
        $description = $request->description;
        $price = $request->price;

        return [
            'category_id' => $categoryId,
            'calculate_unit' => $calculateUnit,
            'name' => $name,
            'slug' => Str::slug($name),
            'barcode' => $barcode,
            'short_description' => $shortDescription,
            'description' => $description,
            'price' => $price,
        ];
    }
}
