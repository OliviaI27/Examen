<?php

namespace App\Http\Controllers;

use App\Models\Sarcini;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\View\View;


class SarciniController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sarcini = Sarcini::all();
        return view('index',[
            'sarcini'=>$sarcini
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'completed'=>'required',

        ]);

        $sarcini = new Sarcini ();
        $sarcini->title = $request->title;
        $sarcini->description = $request->description;
        $sarcini->completed = $request->cpmpleted;
        $sarcini->save();

        Sarcini::create($request->all());
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Sarcini $sarcini): View
    {
        return view('show',['sarcini'=>$sarcini]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sarcini $sarcini)
    {
        return view('edit',['sarcini'=>$sarcini]);
    }

    /**
     * Update the specified resource in storage.
     */

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sarcini $sarcini)
    {
        $sarcini->delete();
        return redirect()->back();
    }
}
