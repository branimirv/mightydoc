<?php

namespace App\Http\Controllers;

use App\Http\Requests\DiseaseGroupRequest;
use App\Models\DiseaseGroup;

use App\Http\Requests;

class DiseaseGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $diseaseGroups = DiseaseGroup::all();
        return view('diseaseGroup.index', compact('diseaseGroups'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('diseaseGroup.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\DiseaseGroupRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DiseaseGroupRequest $request)
    {
        DiseaseGroup::create($request->all());
        return redirect(route('diseaseGroup.index'));
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
     * @param  \App\Http\Requests\DiseaseGroupRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DiseaseGroupRequest $request, $id)
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
}
