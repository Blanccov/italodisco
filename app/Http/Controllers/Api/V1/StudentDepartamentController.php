<?php

namespace App\Http\Controllers\Api\V1;

use App\Filters\V1\StudentDepartamentFilter;
use App\Models\Student_departament;
use App\Http\Requests\StoreStudent_departamentRequest;
use App\Http\Requests\UpdateStudent_departamentRequest;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\Student_departamentCollection;
use App\Http\Resources\V1\Student_departametnResource;
use Illuminate\Http\Request;

class StudentDepartamentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $filter = new StudentDepartamentFilter();
        $filterItems = $filter->transform($request);

        if (count($filterItems) == 0) {
            return new Student_departamentCollection(Student_departament::paginate());
        } else {
            $addresses = Student_departament::where($filterItems)->paginate();

            return new Student_departamentCollection($addresses->appends($request->query()));
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
    public function store(StoreStudent_departamentRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Student_departament $student_departament)
    {
        return new Student_departametnResource($student_departament);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student_departament $student_departament)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStudent_departamentRequest $request, Student_departament $student_departament)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student_departament $student_departament)
    {
        //
    }
}
