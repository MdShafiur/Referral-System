<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Referral;
use Illuminate\Http\Request;

class ReferralController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'referrer_id' => 'required|exists:users,id',
            'referred_id' => 'required|exists:users,id|different:referrer_id',
        ]);

        $referral = Referral::create($validated);

        
        $referrer = User::find($validated['referrer_id']);
        $referrer->bonus_balance += 25;
        $referrer->save();

        return response()->json([
            'message' => 'Referral recorded successfully.',
            'referral' => $referral
        ], 201);
    }
}
