<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CategoryRequest;
use App\Repositories\Category\CategoryRepositoryInterface;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    protected $categoryRepository;

    public function __construct(CategoryRepositoryInterface $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function index()
    {
        try {
            $categories = $this->handleCategories();

            return view('admin.pages.category.categories')->with([
                'categories' => $categories['categories'],
                'decodeArray' => $categories['decodeArray'],
            ]);
        } catch (\Exception $ex) {
            report($ex);

            return $ex;
        }
    }

    public function store(CategoryRequest $request)
    {
        try {
            $images = [
                'logo' => 'null',
                'image' => 'null',
            ];
            $handleImage = $this->handleImage($request);
            if (isset($handleImage['logo'])) {
                $images['logo'] = $handleImage['logo'];
            }
            if (isset($handleImage['image'])) {
                $images['image'] = $handleImage['image'];
            }
            $category = $this->categoryRepository->create([
                'name' => $request->name,
                'slug' => \Str::slug($request->name),
                'parent_id' => $request->parent_id,
                'description' => $request->description,
                'images' => json_encode($images),
            ]);

            return response()->json($category);
        } catch (\Exception $ex) {
            report($ex);

            return $ex;
        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $category = $this->categoryRepository->find($id);

        return response()->json($category);
    }

    public function update(CategoryRequest $request, $id)
    {
        try {
            $category = $this->categoryRepository->find($id);

            $images = [
                'logo' => json_decode($category['images'])->logo,
                'image' => json_decode($category['images'])->image,
            ];
            $handleImage = $this->handleImage($request);
            if (isset($handleImage['logo'])) {
                $images['logo'] = $handleImage['logo'];
            }
            if (isset($handleImage['image'])) {
                $images['image'] = $handleImage['image'];
            }

            $category = $this->categoryRepository->update($id, [
                'name' => $request->name,
                'slug' => \Str::slug($request->name),
                'parent_id' => $request->parent_id,
                'description' => $request->description,
                'images' => json_encode($images),
            ]);

            return response()->json($category);
        } catch (\Exception $ex) {
            report($ex);

            return $ex;
        }
    }

    public function destroy($id)
    {
        try {
            $category = $this->categoryRepository->delete($id);
        } catch (\Exception $ex) {
            report($ex);

            return $ex;
        }
    }

    public function handleCategories()
    {
        $decoded = [];
        $categories = $this->categoryRepository->getAllCategoriesDESC();
        foreach ($categories as $key => $category) {
            $decoded[$key] = json_decode($category['images'], true);
        }

        return [
            'categories' => $categories,
            'decodeArray' => $decoded,
        ];
    }

    public function handleImage($request)
    {
        $images = [];
        if ($request->hasFile('logo')) {
            $logoExtension = $request->logo->extension();
            $logoName = \Str::slug(Carbon::now() . '-' . $request->name) . '-logo.' . $logoExtension;
            $logo =  $request->file('logo')->storeAs('upload', $logoName);
            Storage::disk('s3')->setVisibility($logo, 'public');
            $images['logo'] = Storage::disk('s3')->url($logo);
        }
        if ($request->hasFile('image')) {
            $imageExtension = $request->image->extension();
            $imageName = \Str::slug(Carbon::now() . '-' . $request->name) . '-image.' . $imageExtension;
            $image = $request->file('image')->storeAs('upload', $imageName);
            Storage::disk('s3')->setVisibility($image, 'public');
            $images['image'] = Storage::disk('s3')->url($image);
        }

        return $images;
    }
}
