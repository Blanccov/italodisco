<?php

namespace App\Http\Controllers\Api\V1;

use App\Filters\V1\ResultFilter;
use App\Models\Result;
use App\Http\Requests\StoreResultRequest;
use App\Http\Requests\UpdateResultRequest;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\ResultCollection;
use App\Http\Resources\V1\ResultResource;
use Illuminate\Http\Request;

class ResultController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $filter = new ResultFilter();
        $filterItems = $filter->transform($request);

        if (count($filterItems) == 0) {
            return new ResultCollection(Result::paginate());
        } else {
            $addresses = Result::where($filterItems)->paginate();

            return new ResultCollection($addresses->appends($request->query()));
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
    public function store(StoreResultRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Result $result)
    {
        return new ResultResource($result);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Result $result)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateResultRequest $request, Result $result)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Result $result)
    {
        //
    }
}
