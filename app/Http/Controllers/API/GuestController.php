<?php

namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;
use App\Models\Guest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function storeGuest(Request $request)
    {
            Guest::create($request->all());
    }
}

