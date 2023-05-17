<?php

namespace App\Filters\V1;

use App\Filters\ApiFilter;
use Illuminate\Http\Request;

class AddressFilter extends ApiFilter {
    protected $safeParms = [
        'voivodeship' => ['eq','ne'],
        'city' => ['eq','ne'],
        'street' => ['eq','ne'],
        'houseNumber' => ['eq','ne'],
        'postalCode' => ['eq','ne'],
    ];

    protected $columnMap = [
        'voivodeship' => 'voivodeship',
        'city' => 'city',
        'street' => 'street',
        'houseNumber' => 'house_number',
        'postalCode' => 'postal_code'
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
