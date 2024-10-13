<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class mensaje extends Controller
{
   public function mensaje()
{
    return response()->json([
        "message" => "hola mundo",
        "status" => 200
    ]);
}

}
