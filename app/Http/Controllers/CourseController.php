<?php

namespace App\Http\Controllers;

use App\Course;
use App\Specialty;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $specialtys = Specialty::all();
        $courses = Course::select(
            "course.id",
            "course.description",
            "specialty.description as specialty",
            "course.cicle"
        )
            ->join("specialty", "specialty.id", "=", "course.specialtyid")
            ->orderBy("course.id", "DESC")
            ->paginate(6);
        return view("course", compact("courses", "specialtys"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $courses = Course::select(
            'course.id',
            'course.description',
            'specialty.description as specialty',
            "course.cicle"
        )
            ->join('specialty', 'specialty.id', '=', 'course.specialtyid')
            ->orderBy('id', 'DESC')->paginate(6);

        return view('coursetable', compact('courses'));
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
        $this->validate($request, ['specialtyid' => 'required', 'description' => 'required', 'cicle' => 'required']);
        $course = new Course();
        $course->description = $request->description;
        $course->specialtyid = $request->specialtyid;
        $course->cicle = $request->cicle;
        $course->save();
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

        $courses = Course::select(
            'course.id',
            'course.description',
            'specialty.description as specialty',
            "course.cicle"
        )
            ->join('specialty', 'specialty.id', '=', 'course.specialtyid')
            ->where('course.description', "like", $show)->paginate(6);

        return view('coursetable', compact('courses'));
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
        $course = Course::find($request["id"]);
        return $course;

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
        $course = Course::find($request["id"]);
        $course->description = $request->description;
        $course->specialtyid = $request->specialtyid;
        $course->save();
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
        Course::find($request["id"])->delete();
        return   $this->create();
    }
}
