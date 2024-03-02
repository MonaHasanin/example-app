<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Beverages;
use App\Traits\Common;
use App\Models\Category;
use Illuminate\Http\RedirectResponse;
use App\Models\Contact;
class BeveragesController extends Controller
{
     use Common;

    public function index()
    {
        // $contacts = Contact::all();
        $category = Category::all();
        $beverages = Beverages::all();
         return view("admin.bev.beverages", compact('beverages', 'category' ) );
    }
    public function create(){
        $cat_bev  = Category::all();
        $categories  = Category::all();
        return view("admin.bev.addBeverage", compact('cat_bev', 'categories') );
     }

     public function store(Request $request): RedirectResponse
     {
        $data = $request->validate
        ([
             'title'=>'required|unique:beverages|max:150',
             'image' => 'required|mimes:png,jpg,jpeg',
             'content'=>'required|max:510',
             'price'=>'max:10',
             'category_id'=> 'required',
            ], [
                'title.required' =>"Title is required",
                'image.required' => "Image is must",
                'content.required' => "Content please",
                'price' => "don't forget price..",
                'category_id.required' => "Please select a category",
            ]);
            $data ['publish'] = isset($request['publish'])? 1 :0 ;
            $data ['check'] = isset($request['check'])? 1 :0 ;

            $file_name = $this->uploadFile($request->image, ('assets/images'));
            $data['image'] = $file_name;

            Beverages::create($data);
            return  redirect("Beverages")->with('success','Beverages Added Successfully'  );
        }


        public function edit(string $id)
    {
        // $contacts = Contact::all();
        $cat_bev  = Category::all();
        $categories  = Category::all();
        $beverages = beverages::findOrFail($id);
        return view('admin.bev.editBeverage', compact('beverages', 'categories' , 'cat_bev'));
    }
    public function update(Request $request, string $id)
{
    $data = $request->validate([
        'title' => 'max:150',
        'image' => 'sometimes|mimes:png,jpg,jpeg',
        'content' => 'max:510',
        'price' => 'max:10',
        'category_id' => 'required'
    ]);

    $data['publish'] = isset($request['publish']) ? 1 : 0;
    $data['check'] = isset($request['check']) ? 1 : 0;

    if ($request->hasFile('image')) {
        $file_name = $this->uploadFile($request->image, 'assets/images');
        $data['image'] = $file_name;
    }

    Beverages::findOrFail($id)->update($data);

    return redirect('Beverages')->with('success', 'Beverages edited Successfully');
}

public function destroy(string $id)
{
    $beverage = Beverages::findOrFail($id);
    $beverage->delete();
    return redirect('Beverages')
        ->with('success','Beverages deleted Successfully' );
}

    }

