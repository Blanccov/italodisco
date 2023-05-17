<?php

namespace App\Http\Controllers\Api\V1;

use App\Filters\V1\DepartamentFilter;
use App\Models\Departament;
use App\Http\Requests\StoreDepartamentRequest;
use App\Http\Requests\UpdateDepartamentRequest;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\DepartamentCollection;
use App\Http\Resources\V1\DepartamentResource;
use Illuminate\Http\Request;

class DepartamentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $filter = new DepartamentFilter();
        $filterItems = $filter->transform($request);

        if (count($filterItems) == 0) {
            return new DepartamentCollection(Departament::paginate());
        } else {
            $addresses = Departament::where($filterItems)->paginate();

            return new DepartamentCollection($addresses->appends($request->query()));
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
    public function store(StoreDepartamentRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Departament $departament)
    {
        return new DepartamentResource($departament);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Departament $departament)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDepartamentRequest $request, Departament $departament)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Departament $departament)
    {
        //
    }
}
