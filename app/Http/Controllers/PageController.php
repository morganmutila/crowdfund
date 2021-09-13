<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Project;

class PageController extends Controller
{
    public function discover($category = null){
        $categories = Category::all();
        //$projects = Project::where('category_id', $category)->latest()->get();

        $projects = Project::latest()->with('user', 'category');

        if($category = request('category')){

            $category = Category::filterStripCategory($category);

            $projects = $projects->where('category_id', Category::whereName($category)->pluck('id')->first());
        }

        $projects = $projects->get();

        return view('discover', compact('categories', 'projects'));

    }

    public function noPage404(){
        return view('errors.404');
    }
}
