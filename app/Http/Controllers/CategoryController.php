<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Services\CategoryService;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return view("dashboard.category.index",["categories"=>$categories]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function getCategorymobilesentrix(CategoryService $CategoryService)
    {

        $categories = $CategoryService->getCategory();
        $type = 2;
        foreach ($categories as $categoryData) {


            if (is_array($categoryData) && isset($categoryData['name'])) {
                $existingCategory= Category::where([
                    "category" => $categoryData['name'],
                ])->first();

                if (!$existingCategory) {
                    $newCategory = new Category();
                    $newCategory->category = $categoryData['name'];
                    $newCategory->slug = Str::slug($categoryData['name']);
                    $newCategory->entity_id = $categoryData['entity_id'];
                    $newCategory->status = 'active';
                    $newCategory->save();
                }
            }
        }

        return $this->index();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Category::find($id);
        return view("dashboard.category.edit",["data"=>$data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'categy' => 'required|unique:categories|max:255',
        ]);
        $user = Category::where("id", $id)
                                ->update([
                                    "category" => $request->category,
                                ]);

        return redirect()->route("mobilesentrix.category.index")->with("status","The category has been updated");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Category::find($id);
        $product->delete();
        return redirect()->route("mobilesentrix.category.index")->with("status","The category has been deleted");
    }
}
