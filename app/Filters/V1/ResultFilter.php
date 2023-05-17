<?php

namespace App\Filters\V1;

use App\Filters\ApiFilter;
use Illuminate\Http\Request;

class ResultFilter extends ApiFilter {
    protected $safeParms = [
        'firstSubject' => ['eq','ne'],
        'secondSubject' => ['eq','ne'],
        'thirdSubject' => ['eq','ne'],
        'firstSubject' => ['eq', 'ne', 'lt', 'lte', 'gt', 'gte'],
        'secondSubject' => ['eq', 'ne', 'lt', 'lte', 'gt', 'gte'],
        'thirdSubject' => ['eq', 'ne', 'lt', 'lte', 'gt', 'gte'],
    ];

    protected $columnMap = [
        'firstSubject' => 'first_subject',
        'secondSubject' => 'second_subcject',
        'thirdSubject' => 'third_subject',
        'firstPercent' => 'first_percent',
        'secondPercent' => 'second_percent',
        'thirdPercent' => 'third_percent'
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
