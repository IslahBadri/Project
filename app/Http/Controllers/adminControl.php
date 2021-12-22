<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Project;

class adminControl extends Controller
{
    public function project(){
        return view("admin.createp");
    }

    function monitor()
    {
        $data=Project::all();
        return view('admin.project', compact('data'));
    }

    public function user()
    {
        $data=User::all();
        return view("admin.createp",compact("data"));
    }
}
