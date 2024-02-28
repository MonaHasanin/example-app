<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('admin.cat.categories',  compact('categories'));
    }

    public function create()
    {
        $categories  = Category::all();
        return view('admin.cat.addCategory', compact('categories'));
    }
    public function store(Request $request) :RedirectResponse
    {
        $category = new Category();
        $category->name = $request->input('name');
        $category->save();
        return redirect('categories');
    }

    public function edit(string $id)
    {
        $category = Category::findOrFail($id);
        return view('admin.cat.editCategory', compact('category'));
    }
    public function update(Request $request, Category $category)
    {
        $validated = $this->validate($request,[
            'name' => 'required|min:3|max:50'
        ]);

        $category->update($validated);
        return redirect()
            ->route('categories', $category->id)
            ->withMessage('Edited successfuly!');
    }
}
