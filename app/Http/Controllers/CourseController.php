<?php

namespace App\Http\Controllers;

use App\Http\Requests\Course\DestroyRequest;
use App\Http\Requests\Course\StoreRequest;
use App\Http\Requests\Course\UpdateRequest;
use App\Models\Course;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class CourseController extends Controller
{
    public function index()
    {

        return view('courses.index');
    }

    public function api()
    {
        return DataTables::of(Course::query())->make(true);
    }

    public function create()
    {
        return view('courses.create');
    }


    public function store(StoreRequest $request)
    {
        // dd($request->validated());
        // $object = new Course();
        // $object->fill($request->except('_token'));
        // $object->save();
        Course::create($request->validated());

        return redirect()->route('courses.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        return view('courses.edit', [
            'each' => $course,
        ]);
    }

    public function update(UpdateRequest $request, Course $course)

    {
        $course->update(
            $request->except([
                '_token',
                '_method'
            ])
        );
        return redirect()->route('courses.index');
    }


    public function destroy(DestroyRequest $request, $course)
    {
        // $course->delete();
        Course::destroy($course);
        return redirect()->route('courses.index');
    }
}