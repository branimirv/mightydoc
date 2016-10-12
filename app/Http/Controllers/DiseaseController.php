<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\DiseaseGroup;
use App\Models\Symptom;
use App\Http\Requests\DiseaseRequest;
use App\Models\Disease;


class DiseaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $diseases = Disease::with('diseaseGroup')->with('symptoms')->get();

        return view('disease.index', compact('diseases'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $diseaseGroups = DiseaseGroup::all();
        $symptoms = Symptom::all();

        return view('disease.create', compact('diseaseGroups', 'symptoms'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\DiseaseRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DiseaseRequest $request)
    {
        $symptoms = $request->input('symptoms');

        $disease = Disease::create($request->all());
        $disease->symptoms()->attach($symptoms);

        $disease->save();

        return redirect(route('disease.index'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $disease = Disease::find($id);
        $diseaseGroups = DiseaseGroup::all();
        $symptoms = Symptom::all();

        return view('disease.edit', compact('disease', 'diseaseGroups', 'symptoms'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\DiseaseRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DiseaseRequest $request, Disease $disease)
    {
        $disease->update($request->all());

        $disease->symptoms()->sync($request->input('symptoms'));
        $disease->diseaseGroup()->associate($request->input('diseaseGroup'));

        return redirect(route('disease.index'));
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

    public function test()
    {
        $diseases = Disease::where('id', '<', '10')->get();

        return $diseases;
    }
}
