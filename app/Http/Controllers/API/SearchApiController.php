<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\House;
use Illuminate\Support\Facades\DB;

class SearchApiController extends Controller
{
    public function search(Request $request)
    {
        $houses = House::name($request->name)->bedrooms($request->bedrooms)->get();
        return response()->json($houses);
    }
}