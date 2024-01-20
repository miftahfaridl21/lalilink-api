<?php

namespace App\Http\Controllers\Api;

use App\Models\LinkApp;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LinkController extends Controller
{
    public function index()
    {
        $tautan = LinkApp::all();
        return response()->json([
            'data' => $tautan
        ], 201);
    }
}
