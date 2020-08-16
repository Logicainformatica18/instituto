<?php

namespace App\Http\Controllers;

use App\Position;
use Illuminate\Http\Request;

class PositionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $positions = Position::orderBy('id', 'DESC')->paginate(6);
        return view('position', compact('positions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        //
           $positions=Position::orderBy('id','DESC')->paginate(6);
           return view('positiontable',compact('positions'));

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
        Position::create($request->all());

        //    return $this->withSuccess('Valor del success');
     //   return response()->redirectToAction('positionController@create');
            return $this->create();
        //return redirect()->route('position.create')->withSuccess('Valor del success');

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
        $positions=Position::where('description',"like",$show)->paginate(6);
        return view('positiontable',compact('positions'));


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
        $positions =  Position::find($request["id"]);
        return $positions;





        //return view('libro.',compact('positions'));
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
        Position::find($request["id"])->update($request->all());
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
        Position::find($request["id"])->delete();
        return   $this->create();
    }
}
