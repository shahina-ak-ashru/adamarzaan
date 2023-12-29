<?php
namespace App\Http\Controllers\Admin;
use App\Http\Requests\CategorySaveRequest;
//use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class CategoryController
{
    public function list(){
        $categories = Category::latest()->paginate();
        return view('admin.categories.list',compact('categories'));
    }
    public function create(){
        return view('admin.categories.create');
    }
    public function save(CategorySaveRequest $request){
        $input = $request->validated();
        Category::create($input);
        return redirect()->route('admin.category.list')->with('message','Category Saved Successfully');
    }
    public function edit($id){
        $category = Category::find(decrypt($id));
        return view('admin.categories.edit',compact('category'));
    }
    public function update(CategorySaveRequest $request){
        $input = $request->validated();
        $category = Category::find(decrypt($request->category_id));
        $category->update($input);
        return redirect()->route('admin.category.list')->with('message','Category Updated Successfully..');
    }
    public function delete($id){
        $category = Category::find(decrypt($id));
        $category->delete();
        return redirect()->route('admin.category.list')->with('message','Category Deleted Successfully..');

    }
}
