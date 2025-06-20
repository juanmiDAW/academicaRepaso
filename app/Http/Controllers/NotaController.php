<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNotaRequest;
use App\Http\Requests\UpdateNotaRequest;
use App\Models\Nota;

class NotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreNotaRequest $request)
    {
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Nota $nota)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Nota $nota)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateNotaRequest $request, Nota $nota)
    {
        $validate = $request->validated();
        $nota->fill($validate);
        $nota->save();
        return redirect()->route('notas', ['id'=> $nota->alumno_id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Nota $nota)
    {
        //
    }
}
