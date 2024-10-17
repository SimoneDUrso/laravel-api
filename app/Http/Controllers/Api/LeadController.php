<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\NewContact;
use Illuminate\Support\Facades\Validator;
use App\Models\Lead;
use Illuminate\Support\Facades\Mail;

class LeadController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->all();

        $validator = Validator::make(
            $data,
            [
                'name' => ['required', 'max:50'],
                'surname' => ['required', 'max:100'],
                'email' => ['required', 'max:120'],
                'phone' => ['required', 'max:20'],
                'content' => ['required'],
            ],

            $errors = [
                'name.required' => 'Il nome è obbligatorio',
                'surname.required' => 'Il cognome è obbligatorio',
                'email.required' => 'La mail è obbligatoria',
                'phone.required' => 'Il telefono è obbligatorio',
                'content.required' => 'Il contenuto della email è obbligatorio',
                'name.max' => 'Il nome deve essere lungo al massimo :max caratteri',
                'surname.max' => 'Il cognome deve essere lungo al massimo :max caratteri',
                'email.max' => 'L\'indirizzo deve essere lungo al massimo :max caratteri',
                'phone.max' => 'Il numero di telefono deve essere lungo al massimo :max caratteri',

            ]
        );

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ]);
        }

        $new_lead = new Lead();
        $new_lead->fill($data);
        $new_lead->save();

        Mail::to('hello@example.com')->send(new NewContact($new_lead));

        return response()->json([
            'success' => true,
        ]);
    }
}
