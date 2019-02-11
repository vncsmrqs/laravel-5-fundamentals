<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function contact () 
    {
        return view('pages.contact');
    }

    public function about () 
    {
        $people = [
            'João', 'Maria', 'José'
        ];
        //$people = [];

        return view('pages.about')->with('people', $people);
    }
}
