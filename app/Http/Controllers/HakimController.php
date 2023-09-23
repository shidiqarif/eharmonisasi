<?php

namespace App\Http\Controllers;

use App\Models\Hakim;
use Illuminate\Http\Request;
use Illuminate\View\View;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\RedirectResponse;

class HakimController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $hakims = Hakim::orderBy('nama')->paginate(10);
        return view('referensi.hakim.index',['hakims' => $hakims]);       
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('hakim.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        /*
        $validateData = $request->validate([
            'nama' => 'required',
            'nip' => 'required|alpha_num|size:18|unique:hakims,nip',
            'keterangan' => 'required',
            'status' => 'required',
        ]);
        // dd($validateData);
        Hakim::create($validateData);
        Alert::success('Berhasil', "Hakim $request->nama berhasil dibuat");
        return back();
        */
        $validator = \Validator::make($request->all(), [
            'nama' => 'required',
            'nip' => 'required|alpha_num|size:18|unique:hakims,nip',
            'keterangan' => 'required',
            'status' => 'required',
        ]);

        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }

        $input = $request->all();
        Hakim::create($input);
        return response()->json(['success'=>'Data is successfully added']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Hakim $hakim)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Hakim $hakim)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Hakim $hakim)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hakim $hakim)
    {
        //
    }
}
