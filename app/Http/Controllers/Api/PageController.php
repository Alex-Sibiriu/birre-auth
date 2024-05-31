<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Beer;

class PageController extends Controller
{
    public function index()
    {
        $beers = Beer::all();
        return response()->json($beers);
    }
}
