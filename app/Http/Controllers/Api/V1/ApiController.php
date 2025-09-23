<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function include(string $relationship): bool {
        $param = request()->get('include');

        if(!isset($param)) {
            return false;
        }

        $includeValues = explode(',', strtolower($param));
        $lowerRelationship = strtolower($relationship);
        
        return in_array($lowerRelationship, $includeValues);
    }
}
