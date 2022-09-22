<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Main extends Controller
{
    public function checkRole()
    {
        echo "name: Hoai login";
    }

    public function showNews(Request $req){
        $query = $req->query();
        $path = $req->path();
        return view('hello-world')->with(['name' => $query['name'], 'path' => $path]);
    }
}
