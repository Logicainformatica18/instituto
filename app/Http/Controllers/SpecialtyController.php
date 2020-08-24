<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Specialty;
use App\Institute;

class SpecialtyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //  select
        $institutes = Institute::all();
        //  table;
        $specialtys = Specialty::select(
            'specialty.id',
            'specialty.description',
            'institute.description as institute'
        )
            ->join('institute', 'institute.id', '=', 'specialty.instituteid')
            ->orderBy('id', 'DESC')->paginate(6);

        return view('specialty', compact('specialtys', 'institutes'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        //  table;
        $specialtys = Specialty::select(
            'specialty.id',
            'specialty.description',
            'institute.description as institute'
        )
            ->join('institute', 'institute.id', '=', 'specialty.instituteid')
            ->orderBy('id', 'DESC')->paginate(6);

        return view('specialtytable', compact('specialtys'));
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
        $this->validate($request, ['description' => 'required', 'instituteid' => 'required']);
        $specialty = new Specialty();
        $specialty->description = $request->description;
        $specialty->instituteid = $request->instituteid;
        $specialty->save();
        return $this->create();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $show = "%" . $request["show"] . "%";

        $specialtys = Specialty::select(
            'specialty.id',
            'specialty.description',
            'institute.description as institute'
        )
            ->join('institute', 'institute.id', '=', 'specialty.instituteid')
            ->where('specialty.description', "like", $show)->paginate(6);

        return view('specialtytable', compact('specialtys'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        //
        $specialtys = Specialty::find($request["id"]);
        return $specialtys;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //

        $specialtys = Specialty::find($request["id"]);
        $specialtys->description = $request->description;
        $specialtys->instituteid = $request->instituteid;
        $specialtys->save();
        return   $this->create();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
        Specialty::find($request["id"])->delete();
        return   $this->create();
    }
}
