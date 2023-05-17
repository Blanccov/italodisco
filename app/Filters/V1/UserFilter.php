<?php

namespace App\Filters\V1;

use App\Filters\ApiFilter;
use Illuminate\Http\Request;

class UserFilter extends ApiFilter {
    protected $safeParms = [
        'name' => ['eq','ne'],
        'email' => ['eq', 'ne'],
        'password' => ['eq', 'ne'],
        'studentId' => ['eq', 'ne', 'lt', 'lte', 'gt', 'gte'],
        'roleId' => ['eq', 'ne', 'lt', 'lte', 'gt', 'gte'],
    ];

    protected $columnMap = [
        'name' => 'name',
        'emial' => 'email',
        'password' => 'password',
        'studentId' => 'student_id',
        'roleId' => 'role_id'
    ];

    protected $operatorMap = [
        'eq' => '=',
        'lt' => '<',
        'lte' => '<=',
        'gt' => '>',
        'gte' => '>=',
        'ne' => '!='
    ];
}
