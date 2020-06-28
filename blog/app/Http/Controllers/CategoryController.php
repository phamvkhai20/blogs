<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\User;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Requests\Category\CategoryRequest;

class CategoryController extends Controller
{
     
    public function show(){
        $categories=Category::with(['user','posts'])->get();
        return view('k2k-admin.categories.show',['categories'=>$categories]);

    }
    public function create(){
        return view('k2k-admin.categories.create');
    }
    public function store(CategoryRequest $req ){
        $data=request()->all();
        $params= \Arr::except($data,['_token',]);
        Category::create($params);
        request()->flashOnly(['name_category']);

        return redirect()->route('k2k-admin.categories.show');
    }

    public function edit($id){
        $category= Category::find($id);
        return view('k2k-admin.categories.edit',['category'=>$category,]);
    }
    public function update(CategoryRequest $req, $id){

        $category= Category::find($id);
        $params=[];
        $params['name_category']=request()->get('name_category');
        $params['user_id']=request()->get('user_id');
        $params['status']=request()->get('status');

        $category->update($params);
        return redirect()->route('k2k-admin.categories.show');
        }

        
        public function destroy(Category $category){
            $post=Post::where('Category_Id',$category->id)->delete();
            $category->delete();
            return redirect()->route('k2k-admin.categories.show');
        }
}


