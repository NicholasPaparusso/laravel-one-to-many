<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\User;


class DashboardController extends Controller
{
//    public function index(){
//         $projects_counter = Project::where('user_id', Auth::id())->count();
//         return view('admin.home', compact('projects_counter'));
//    }

   public function index(){
    $projects_counter = Project::count();
    return view('admin.home', compact('projects_counter'));
}
}
