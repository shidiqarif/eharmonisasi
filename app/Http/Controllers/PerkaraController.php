<?php

namespace App\Http\Controllers;

use App\Models\Perkara;
use Illuminate\Http\Request;

class PerkaraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('perkara.index');
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Perkara $perkara)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Perkara $perkara)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Perkara $perkara)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Perkara $perkara)
    {
        //
    }
}
