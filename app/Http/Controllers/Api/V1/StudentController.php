<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Student;
use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\StudentResource;
use App\Http\Resources\V1\StudentCollection;
use App\Filters\V1\StudentFilter;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $filter = new StudentFilter();
        $filterItems = $filter->transform($request);

        if (count($filterItems) == 0) {
            return new StudentCollection(Student::paginate()); //zamiast all może być paginate ale bez firefoxa troche ussles
        } else {
            $students = Student::where($filterItems)->paginate();

            return new StudentCollection($students->appends($request->query()));
        }

    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreStudentRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        return new StudentResource($student);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStudentRequest $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        //
    }
}
