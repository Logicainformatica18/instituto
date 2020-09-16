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
        $persons = Person::select(
            'person.id',
            'person.dni',
            'person.firstname',
            'person.lastname',
            'person.names',
            'person.datebirth',
            'person.email',
            'person.photo',
            'person.cellphone',
            'person.sex',
            'position.description as position'
        )
            ->join('position', 'position.id', '=', 'person.positionid')
            ->orderBy('id', 'DESC')->paginate(6);

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
        $persons = Person::select(
            'person.id',
            'person.dni',
            'person.firstname',
            'person.lastname',
            'person.names',
            'person.datebirth',
            'person.email',
            'person.photo',
            'person.cellphone',
            'person.sex',
            'position.description as position'
        )
            ->join('position', 'position.id', '=', 'person.positionid')
            ->orderBy('id', 'DESC')->paginate(6);
        return view('persontable', compact('persons'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $request->datebirth = datebirth($request->day, $request->month, $request->year);

        try {
            $person = new Person();
            $person->positionid = $request->positionid;
            $person->dni = $request->dni;
            $person->firstname = $request->firstname;
            $person->lastname = $request->lastname;
            $person->names = $request->names;
            $person->password = $request->password ?: "system2020";
            $person->datebirth = $request->datebirth;
            $person->cellphone = $request->cellphone;
            //photo
            $request->photo = photoStore($request->file('photo'),"imageperson");

            $person->photo = $request->photo;
            $person->email = $request->email;
            $person->sex = $request->sex;
            $person->save();
        } catch (\Exception $e) {
            // do task when error
            //   return  $e->getMessage();   // insert query
            return "<div style='background-color:red'> ERROR</div>";
        }
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
        //
        $show = "%" . $request["show"] . "%";
        $persons = Person::where('firstname', "like", $show)->paginate(6);
        return view('persontable', compact('persons'));
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
        $persons =  Person::find($request["id"]);
        return $persons;
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
        $request->datebirth = datebirth($request->day, $request->month, $request->year);

        if ($request->photo == "") {
            Person::find($request->id)->update([
                'dni' => $request->dni,
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'names' => $request->names,
                'datebirth' => $request->datebirth,
                'cellphone' => $request->cellphone,
                'email' => $request->email,
                'sex' => $request->sex
            ]);
        } else {
            $table = Person::find($request["id"]);
            photoDestroy($table->photo,"imageusers");
            $request->photo = photoStore($request->file('photo'),"imageusers");
            Person::find($request->id)->update([
                'dni' => $request->dni,
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'names' => $request->names,
                'datebirth' => $request->datebirth,
                'cellphone' => $request->cellphone,
                'photo' => $request->photo,
                'email' => $request->email,
                'sex' => $request->sex
            ]);
        }
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
        $table = Person::find($request["id"]);
        $this->photoDestroy($table->photo,"imageperson");


        Person::find($request["id"])->delete();
        return   $this->create();
    }

}
