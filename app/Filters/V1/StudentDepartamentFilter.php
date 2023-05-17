<?php

namespace App\Filters\V1;

use App\Filters\ApiFilter;
use Illuminate\Http\Request;

class StudentDepartamentFilter extends ApiFilter {
    protected $safeParms = [
        'studentId' => ['eq', 'ne', 'lt', 'lte', 'gt', 'gte'],
        'departamentId' => ['eq', 'ne', 'lt', 'lte', 'gt', 'gte'],
        'resultId' => ['eq', 'ne', 'lt', 'lte', 'gt', 'gte'],
    ];

    protected $columnMap = [
        'studentId' => 'student_id',
        'departamentId' => 'departament_id',
        'resultId' => 'result_id'
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
