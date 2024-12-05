<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6'
        ]);

        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => bcrypt($validated['password']),
        ]);

        return response()->json([
            'message' => 'User created successfully.',
            'user' => $user
        ], 201);
    }

    /**
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function referrals($id)
    {
        $user = User::with('referrals')->findOrFail($id);

        return response()->json([
            'referral_count' => $user->referrals->count(),
            'bonus_balance' => $user->bonus_balance,
        ]);
    }

    /**
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     */
    public function fetchReferralData(Request $request)
    {
        $userId = $request->input('user_id');

        try {
            $user = User::with('referrals')->findOrFail($userId);

            $referralData = [
                'user_id' => $userId,
                'referral_count' => $user->referrals->count(),
                'bonus_balance' => $user->bonus_balance,
            ];

            return view('welcome', compact('referralData'));
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return view('welcome', ['error' => 'User not found.']);
        }
    }
}
