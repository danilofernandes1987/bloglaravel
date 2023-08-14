<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Artigo;

class ArtigoController extends Controller
{
    private $artigo;

    public function __construct(Artigo $artigo)
    {
        $this->artigo = $artigo;
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if (is_null($request->pesquisa)) {
            $artigos = $this->artigo->orderBy('id', 'DESC')->paginate(5);
        } else {
            $query = Artigo::with('User')->where('titulo','LIKE','%'.$request->pesquisa.'%');

            $artigos = $query->orderBy('id', 'DESC')->paginate(5);
        }

        return view('artigos.index', compact('artigos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('artigos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
