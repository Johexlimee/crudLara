<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEjemploRequest;
use App\Models\Categorias;
use App\Models\Ejemplo;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        echo "Index";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $ejemplo = Ejemplo::pluck('id','titulo');
        //dd($ejemplo);
        //dd($ejemplo[0]->titulo);

        
        echo view('dashboard.post.create', compact('ejemplo'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEjemploRequest $request)
    {
        echo "store";

        //Meter datos en la consulta
        //$data = array_merge($request->all(),['image' => '']);
        //Ejemplo::create($data);

        Ejemplo::create($request->all());

        //dd($request);
        //dd(request("titulo"));

        //echo request("titulo");
        //echo $request->input("titulo");
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
