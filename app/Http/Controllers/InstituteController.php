<?php

namespace App\Http\Controllers;

use App\Institute;
use Illuminate\Http\Request;

class InstituteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $institutes = Institute::orderBy('id', 'DESC')->paginate(6);
        return view('institute', compact('institutes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        //
           $institutes=Institute::orderBy('id','DESC')->paginate(6);
           return view('institutetable',compact('institutes'));

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
        $this->validate($request, ['description' => 'required']);
        Institute::create($request->all());

        //    return $this->withSuccess('Valor del success');
     //   return response()->redirectToAction('InstituteController@create');
            return $this->create();
        //return redirect()->route('institute.create')->withSuccess('Valor del success');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        //
        $show="%".$request["show"]."%";
        $institutes=Institute::where('description',"like",$show)->paginate(6);
        return view('institutetable',compact('institutes'));


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
        $institutes =  Institute::find($request["id"]);
        return $institutes;





        //return view('libro.',compact('institutes'));
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
        $this->validate($request, ['description' => 'required']);
        Institute::find($request["id"])->update($request->all());
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
        Institute::find($request["id"])->delete();
        return   $this->create();
    }
}
