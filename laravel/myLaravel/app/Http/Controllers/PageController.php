<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function page1()
    {
        // logical area
        return view('pages.page1');
    }

    public function page2()
    {
        // logical area
        return view('pages.page2');
    }

    public function page3($age = 1)
    {
        // logical area
        // $age = 20;
        return view('pages.page3', ['age' => $age, 'name' => "raj"]);
    }
}
