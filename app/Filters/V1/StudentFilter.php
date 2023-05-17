<?php

namespace App\Filters\V1;

use App\Filters\ApiFilter;
use Illuminate\Http\Request;

class StudentFilter extends ApiFilter {
    protected $safeParms = [
        'name' => ['eq', 'ne'],
        'lastname' => ['eq', 'ne'],
        'pesel' => ['eq', 'ne'],
        'email' => ['eq', 'ne'],
        'age' => ['eq', 'ne', 'lt', 'lte', 'gt', 'gte'],
        'phone' => ['eq', 'ne'],
        'addressId' => ['eq', 'ne', 'lt', 'lte', 'gt', 'gte'],
    ];

    protected $columnMap = [
        'name' => 'name',
        'lastname' => 'lastname',
        'pesel' => 'pesel',
        'email' => 'email',
        'age' => 'age',
        'phone' => 'phone',
        'addressId' => 'address_id'
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
