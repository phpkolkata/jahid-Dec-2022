<?php

// 100% mysql query - in core php ex - insert into category values id=1,name=abc
// laravel approach (1-query builder, 2-Eloquent ORM)
// Query Builder - 50% mysql - DB::table(catgeory)->insert(arr)
// Eloquent - 40% mysql - category::insert(arr)

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $db = DB::table('category')->get();
        return view('category.index', ["db" => $db]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $r)
    {
        //
        $data = $r->except('_token');
        DB::table('category')->insert($data);
        return redirect('/category');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
