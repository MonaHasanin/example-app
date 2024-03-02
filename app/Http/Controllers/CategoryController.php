<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $categories = Category::all();
        return view('admin.cat.categories',  compact('categories','user'));
    }

    public function create()
    {
        $user = Auth::user();
        $categories  = Category::all();
        return view('admin.cat.addCategory', compact('categories','user'));
    }
    public function store(Request $request) :RedirectResponse
    { 
        $category = new Category();
        $category->name = $request->input('name');
        $category->save();
        return redirect('categories') ->withMessage('Added successfully!');
    }

    public function edit(string $id)
    {
        $user = Auth::user();
        $category = Category::findOrFail($id);
        return view('admin.cat.editCategory', compact('category','user'));
    }
    public function update(Request $request, Category $category)
    {
        $user = Auth::user();
        $validated = $this->validate($request,[
            'name' => 'required|min:3|max:50'
        ]);

        $category->update($validated);
        return redirect()
            ->route('categories', $category->id)
            ->withMessage('Edited successfully!' , compact('user'));
    }

    public function destroy($id)
{
    $category = Category::findOrFail($id);

    // to chech if there is beverages in the category
    if ($category->beverages()->count() > 0) {
        return back()->with('error', "Can't delete Category because there is beverages in it.");
    }

    // delete category if there is no beverages in it
    $category->delete();
    return redirect('categories')->with('success', 'Category is deleted successfully.');
}

}
