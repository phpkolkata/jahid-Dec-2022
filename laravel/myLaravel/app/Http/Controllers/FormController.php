<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    //

    public function entry()
    {
        return view("form.entry");
    }

    public function submit(Request $r)
    {
        // $r = new Request();
        // $nm = $r->input('nm');
        // $age = $r->input('age');
        // $data = ['nm' => $nm, 'age' => $age];
        // $data = $r->all();
        // $data = $r->only(['nm', 'age']);
        $data = $r->except(['_token']);
        // return $data;

        // validation logic
        $validated = $r->validate([
            'name' => 'required|max:2',
            'age' => 'required|numeric',
        ]);

        return view('form.submit', ["data" => $data]);
    }
}
