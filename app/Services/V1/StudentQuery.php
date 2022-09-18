<?php

namespace App\Services\V1;

use Illuminate\Http\Request;

class StudentQuery
{
    protected $allowedParms = [
        'gpa' => ['eq', 'gt', 'lt']
    ];

    protected $operatorMap = [
        'eq' => '=',
        'lt' => '<',
        'lte' => '<=',
        'gt' => '>',
        'gte' => '>='
    ];

    public function transform(Request $request)
    {
        $eloQuery = [];

        foreach ($this->allowedParms as $parm => $operators) {

            $query = $request->query($parm);

            if (!isset($query)) {
                continue;
            }

            foreach ($operators as $operator) {

                if (isset($query[$operator])) {
                    $eloQuery = [$parm, $this->operatorMap[$operator], $query[$operator]];
                }
            }
        }
        return $eloQuery;
    }

}
