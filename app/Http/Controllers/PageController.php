<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Project;

class PageController extends Controller
{
    public function discover($category = null){
        if($category != null){
            $projects = Project::where('category_id', $category)->latest()->get();
        }

        $projects = Project::orderBy('created_at')->get();

        return view('discover', compact('category'));
    }

    public function noPage404(){
        return view('errors.404');
    }
}
