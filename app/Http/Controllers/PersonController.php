<?php

namespace App\Http\Controllers;

use App\Person;
use App\Position;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $positions = Position::all();
        $persons = Person::orderBy('id', 'DESC')->paginate(6);
        return view('person', compact('persons', 'positions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        //

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


        //datebirth
        if ($request["day"] < 10) {
            $request["day"] = "0" . $request["day"];
        }
        if ($request["month"] < 10) {
            $request["month"] = "0" . $request["month"];
        }
        $request["datebirth"] =    $request["year"] . "-" . $request["month"] . "-" . $request["day"];


        //photo
        if($request["photo"]!=""){
            $image = $request->file('photo');
            $image->move('uploads', $image->getClientOriginalName());
            $image = $image->getClientOriginalName();
            $request["photo"]=$image;
        }

//,'dni' => 'required','firtname' => 'required','lastname' => 'required','names' => 'required','email' => 'required','datebirth' => 'required'
    //    $this->validate($request, ['positionid' => 'required']);
  //  $this->validate($request, ['positionid' => 'required']);
//  $this->validate($request, ['positionid' => 'required']);
 // Person::create($request->all());
     $person = new Person();
     $person->positionid = $request->positionid;
     $person->dni = $request->dni;
     $person->firstname = $request->firstname;
     $person->lastname = $request->lastname;
     $person->names = $request->names;
     $person->password = $request->password;
   //  $person->datebirth = $request->datebirth;
     $person->cellphone = $request->cellphone;
     $person->photo = $request->photo;
     $person->email = $request->email;
     $person->sex = $request->sex;
     $person->save();


  //     Person::create($request->all());

     //  return  "<img src='uploads/$image' width='100'height='100'>";
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
        //    $show="%".$request["show"]."%";
        //    $institutes=Institute::where('description',"like",$show)->paginate(6);
        //      return view('institutetable',compact('institutes'));


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
        //     $institutes =  Institute::find($request["id"]);
        //     return $institutes;





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
        //     $this->validate($request, ['description' => 'required']);
        //    Institute::find($request["id"])->update($request->all());
        //    return   $this->create();
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
           Person::find($request["id"])->delete();
          //  return   $this->create();
    }
}
