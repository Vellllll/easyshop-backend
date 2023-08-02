<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function getCategory(){
        $categories = Category::all();
        $category_detail = [];

        foreach ($categories as $category) {
            $subcategory = Subcategory::where('category_name', $category->category_name)->get();

            $item = [
                'category_name' => $category->category_name,
                'category_image' => $category->category_image,
                'subcategory_name' => $subcategory,
            ];

            array_push($category_detail, $item);
        }

        return $category_detail;
    }
}
