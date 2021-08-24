<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Project;


class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(User $user){
        return view('users.index', compact('user'));
    }

    public function userProjects(User $user){
        return view('users.projects', compact('user'));
    }

    public function userContributions(User $user){
        return view('users.contributions', compact('user'));
    }
}
