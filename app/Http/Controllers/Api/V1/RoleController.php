<?php

namespace App\Http\Controllers\Api\V1;

use App\Filters\V1\RoleFilter;
use App\Models\Role;
use App\Http\Requests\StoreRoleRequest;
use App\Http\Requests\UpdateRoleRequest;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\RoleCollection;
use App\Http\Resources\V1\RoleResource;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $filter = new RoleFilter();
        $filterItems = $filter->transform($request);

        if (count($filterItems) == 0) {
            return new RoleCollection(Role::paginate());
        } else {
            $addresses = Role::where($filterItems)->paginate();

            return new RoleCollection($addresses->appends($request->query()));
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
    public function store(StoreRoleRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Role $role)
    {
        return new RoleResource($role);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Role $role)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRoleRequest $request, Role $role)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role)
    {
        //
    }
}
