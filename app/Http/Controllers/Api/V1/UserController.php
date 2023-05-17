<?php

namespace App\Http\Controllers\Api\V1;

use Illuminate\Http\Request;
use App\Filters\V1\UserFilter;
use App\Http\Resources\V1\UserCollection;
use App\Models\User;
use App\Http\Resources\V1\UserResource;
use App\Http\Controllers\Controller;


class UserController extends Controller
{
    public function index(Request $request)
    {

        $filter = new UserFilter();
        $filterItems = $filter->transform($request);

        if (count($filterItems) == 0) {
            return new UserCollection(User::all());
        } else {
            $students = User::where($filterItems)->all();

            return new UserCollection($students->appends($request->query()));
        }

    }

    public function show(User $user)
    {
        return new UserResource($user);
    }

}
