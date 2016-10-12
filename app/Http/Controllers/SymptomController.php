<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Http\Requests\SymptomRequest;
use App\Models\Symptom;
use App\Models\BodyArea;

class SymptomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $symptoms = Symptom::all();
        return view('symptom.index', compact('symptoms'));
       // return "Hello";

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $bodyAreas = BodyArea::all();
         return view('symptom.create', compact('bodyAreas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\SymptomRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SymptomRequest $request)
    {
        Symptom::create($request->all());
        return redirect(route('symptom.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function getAllSymptoms()
    {
    $symptoms = App\Symptom::all();
    return $symptoms;


    }
}
