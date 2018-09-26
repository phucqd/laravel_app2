<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index() {
        $arr = [
            'key1' => 1,
            'key2' => 2,
        ];

        $strs = 'This is too long string and expected 120 character' . ' and many variable declared but not use'. ' And missing space in string ....';
        $arr['str'] = $strs;

        return $arr;

    }
}
