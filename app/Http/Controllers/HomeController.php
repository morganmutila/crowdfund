<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Category;
Use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public function index(){

        $projects = Project::orderByDesc('created_at')
                  ->with(['user', 'category'])
                  ->get();

        $faqs = DB::table('faqs')
                ->get();

        $categories = Category::all();

        return view('index',
        [
            'projects'   => $projects,
            'faqs'       => $faqs,
            'categories' => $categories
        ]);
    }

    public function featured(){
        return 'Featurd projects';
    }
}
