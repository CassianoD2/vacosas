<?php

namespace App\Http\Controllers;

use App\Vacosa;
use Illuminate\Http\Request;

class VacosasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vacosas = Vacosa::orderBy('created_at', 'desc')->get();

        return view('vacosas.index', compact('vacosas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vacosas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  Vacosa  $vacosa
     * @return \Illuminate\Http\Response
     */
    public function show(Vacosa $vacosa)
    {
        return view('vacosas.show', compact('vacosa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Vacosa  $vacosa
     * @return \Illuminate\Http\Response
     */
    public function edit(Vacosa $vacosa)
    {
        return view('vacosa.edit', compact('vacosa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Vacosa  $vacosa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vacosa $vacosa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Vacosa $vacosa
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Vacosa $vacosa)
    {
        return $vacosa->delete()
            ? back()->with('status', 'Vacosa excluída com sucesso!')
            : back()->with('error', 'Erro ao excluir vacosa!');
    }
}
