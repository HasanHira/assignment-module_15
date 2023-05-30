<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        // Validating the request data
        $validateData = Validator::make($request->all(), [
            'name' => 'required|string|min:4',
            'email' => 'required|email',
            'message' => 'required|string|min:10',
        ], [
            'name.min' => 'The name must be at least 4 characters.',
            'message.min' => 'The message must be at least 10 characters.',
        ]);

        if ($validateData->fails()) {
            return response()->json(['errors' => $validateData->errors()], 422);
        }

        // Get the form data
        $name = $request->input('name');
        $email = $request->input('email');
        $message = $request->input('message');

        // Return a JSON response
        return response()->json([
            'name' => $name,
            'email' => $email,
            'message' => $message,
            'Confirmation' => 'Message sent successfully!',
        ]);
    }
}
