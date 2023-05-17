<?php

namespace App\Filters\V1;

use App\Filters\ApiFilter;
use Illuminate\Http\Request;

class AddressFilter extends ApiFilter {
    protected $safeParms = ['city' => ['eq','ne']];

    protected $columnMap = ['city' => 'city'];

    protected $operatorMap = [
        'eq' => '=',
        'lt' => '<',
        'lte' => '<=',
        'gt' => '>',
        'gte' => '>=',
        'ne' => '!='
    ];
}
