<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Address;
use App\Http\Requests\StoreAddressRequest;
use App\Http\Requests\UpdateAddressRequest;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\AddressCollection;
use App\Http\Resources\V1\AddressResource;
use Illuminate\Http\Request;
use App\Filters\V1\AddressFilter;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $filter = new AddressFilter();
        $filterItems = $filter->transform($request);

        if (count($filterItems) == 0) {
            return new AddressCollection(Address::all());
        } else {
            $addresses = Address::where($filterItems)->all();

            return new AddressCollection($addresses->appends($request->query()));
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
    public function store(StoreAddressRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Address $address)
    {
        return new AddressResource($address);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Address $address)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAddressRequest $request, Address $address)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Address $address)
    {
        //
    }
}
