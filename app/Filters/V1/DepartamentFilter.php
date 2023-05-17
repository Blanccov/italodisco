<?php

namespace App\Filters\V1;

use App\Filters\ApiFilter;
use Illuminate\Http\Request;

class DepartamentFilter extends ApiFilter {
    protected $safeParms = [
        'name' => ['eq','ne'],
        'field' => ['eq','ne'],
        'places' => ['eq', 'ne', 'lt', 'lte', 'gt', 'gte'],
    ];

    protected $columnMap = [
        'name' => 'name',
        'field' => 'field',
        'places' => 'places'
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
