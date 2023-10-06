<?php

namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;
use App\Models\Guest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function storeGuest(Request $request): JsonResponse
    {
        try
        {
            $order = Guest::create($request->all());
            $order->save();

            $success = true;
            $message = 'Tešíme sa na Vás!';
        }
        catch (\Exception $defEx)
        {
            $success = false;
            $message = $defEx->getMessage();
        }

        $response = [
            'success' => $success,
            'message' => $message,
        ];

        return response()->json($response);
    }
}
