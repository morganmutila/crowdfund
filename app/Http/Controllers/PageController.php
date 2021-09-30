<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Project;

class PageController extends Controller
{
    public function discover(Category $category = null){

        if($category){


            $projects = $category->projects;

        }
        else{

            $projects = Project::latest()->get();
        }

        return view('discover', compact('projects'));

    }

    public function noPage404(){
        return view('errors.404');
    }
}
