<?php

namespace App\Filters\V1;

use App\Filters\ApiFilter;
use Illuminate\Http\Request;

class StudentFilter extends ApiFilter {
    protected $safeParms = ['age' => ['eq','gt','ne']];

    protected $columnMap = ['age' => 'age'];

    protected $operatorMap = [
        'eq' => '=',
        'lt' => '<',
        'lte' => '<=',
        'gt' => '>',
        'gte' => '>=',
        'ne' => '!='
    ];
}
