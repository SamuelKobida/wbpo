<?php

namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;
use App\Models\Guest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GuestController extends Controller
{
    public function storeGuest(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => [
                'required',
                'email',
                function ($attribute, $value, $fail) use ($request) {
                    $existingGuest = Guest::where('email', $value)
                        ->where('event_id', $request->event_id)
                        ->first();

                    if ($existingGuest) {
                        $fail('Tento mail už bol pre túto udalosť použitý');
                    }
                },
            ],
            'phone_number' => 'required',
            'event_id' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json( $validator->errors()->first());
        }

        try {
            Guest::create($request->all());
            $message = 'Používateľ bol úspešne vytvorený.';
        } catch (\Exception $defEx) {
            $message = 'Nastala iná chyba na strane servera.';
        }

        return response()->json($message);
    }
}
