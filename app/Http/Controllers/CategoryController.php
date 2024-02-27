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
        return view('admin.addCategory', compact('categories'));
    }
    public function store(Request $request) :RedirectResponse
    {
        $category = new Category();
        $category->name = $category->request;
        $category->save();
        return redirect('categories');
    }

    public function edit(string $id)
    {
        $categories = Category::findOrFail($id);
        return view('admin.editCategory', compact('categories'));
    }
    public function update(Request $request , string $id) :RedirectResponse
    {
        return redirect('categories');
    }
}
