<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;

class BaseController extends Controller
{
    public function createJsonResponse($data = [], $code = 200)
    {
        $content = [
            'code'   => $code,
            'data'   => $data,
        ];

        return new JsonResponse($content, $code);
    }
}
