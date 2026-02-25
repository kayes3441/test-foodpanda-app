<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SsoController extends Controller
{
    /**
     * Handle SSO login from token
     */
    public function login(Request $request)
    {
        $token = $request->query('token');

        if (!$token) {
            return redirect('/login')
                ->with('error', 'Invalid SSO token.');
        }

        // Retrieve user ID from cache using token
        $userId = cache()->get('sso_token_' . $token);

        if (!$userId) {
            return redirect('/login')
                ->with('error', 'SSO token expired or invalid.');
        }

        // Delete the token (one-time use)
        cache()->forget('sso_token_' . $token);

        // Find and authenticate the user
        $user = User::find($userId);

        if (!$user) {
            return redirect('/login')
                ->with('error', 'User not found.');
        }

        // Log the user in
        Auth::login($user);
        $request->session()->regenerate();

        return redirect('/dashboard')
            ->with('success', 'Successfully logged in via SSO!');
    }
}
