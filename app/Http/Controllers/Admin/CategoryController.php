<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CategoryRequest;
use App\Models\Category;
use App\Repositories\Category\CategoryRepositoryInterface;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Psy\Util\Json;

class CategoryController extends Controller
{
    public function __construct(CategoryRepositoryInterface $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = $this->handleCategories();

        return view('admin.pages.category.categories')->with([
            'categories' => $categories['categories'],
            'decodeArray' => $categories['decodeArray'],
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        dd('ok');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        $logo = 'null';
        $image = 'null';
        if ($request->hasFile('logo')) {
            $logoExtension = $request->logo->extension();
            $logoFile = $request->logo;
            $logoName = \Str::slug(Carbon::now() . '-' . $request->name) . '-logo.' . $logoExtension;
            $logoFile->move('upload', $logoName);
            $logo = 'upload/' . $logoName;
        }
        if ($request->hasFile('image')) {
            $imageExtension = $request->image->extension();
            $imageFile = $request->image;
            $imageName = \Str::slug(Carbon::now() . '-' . $request->name) . '-logo.' . $imageExtension;
            $imageFile->move('upload', $logoName);
            $image = 'upload/' . $imageName;
        }
        $images = [
            'logo' => $logo,
            'image' => $image,
        ];
        $category = Category::create([
            'name' => $request->name,
            'slug' => \Str::slug($request->name),
            'parent_id' => $request->parent_id,
            'description' => $request->description,
            'images' => json_encode($images),
        ]);

        return response()->json($category);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function handleCategories() {
        $decoded = [];
        $categories = $this->categoryRepository->getAll();
        foreach ($categories as $key => $category) {
            $decoded[$key] = json_decode($category['images'], true);
        }

        return [
            'categories' => $categories,
            'decodeArray' => $decoded
        ];
    }
}
