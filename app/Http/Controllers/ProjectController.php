<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Category;
use Intervention\Image\Facades\Image;


class ProjectController extends Controller
{

    // get all the categories and store them here
    private static $categories;

    public function __construct(Category $categories){
        $this->middleware('auth')->except(['create','store', 'show']);
        static::$categories =  $categories::all()->pluck('id', 'name')->toArray();
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     // public static $types = [self::DEFAULT, self::SOCIAL, self::WHATEVER];
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        return view('projects.create', ['categories' => static::$categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if(!auth()->check()){

            return redirect()->guest(route('login'))
                             ->with("status_warning", "You must be logged in to create a project");
        }

        $request->validate([
            'title'         => 'required|min:5|max:150|string',
            'location'      => 'required|max:150',
            'description'   => 'required',
            'image'         => 'required|image|mimes:jpeg,png,jpg,svg,webp|max:5048',
            'category'      => 'required|in:' . implode(',', self::$categories),
            'duration'      => 'required|integer|max:100|min:1',
            'budget'        => 'required|numeric'
        ]);

        if($request->hasFile('image')){
            $imagePath = $request->file('image')->store('uploads/projects/', 'public');
            $img = Image::make(public_path('/storage/' .$imagePath))->resize(640, 360, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
            $img->save();
        }

        try{
            auth()->user()->projects()->create([
                'title'         => $request->input('title'),
                'location'      => $request->input('location'),
                'description'   => $request->input('description'),
                'image'         => $imagePath,
                'category_id'   => $request->input('category'),
                'duration'      => $request->input('duration'),
                'budget'        => $request->input('budget')
            ]);

            return back()->with('status_success', 'Project created successfully');
        }
        catch(\Exception $e){
            return back()->with('status_fail', $e->getMessage());
        }    

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        return view('projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        $project->delete();
        // 1. Delete the project image from the file storage first
        // 2. Delete the project image from the database
    }
}
