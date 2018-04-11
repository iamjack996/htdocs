<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Category;

class CategoryController extends Controller
{
    public function category_setting()
    {
        $Category = Category::all();
        return view('admin.category_setting', [
         'title' => '分類管理',
         'description' => '文章分類管理功能頁面',
         'Categorys' => $Category
      ]);
    }

    public function store(Request $request)
    {
        $category = new category($request->all());
        $category->save();

        return redirect('category_setting');
    }
}
