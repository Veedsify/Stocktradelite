<?php

namespace App\Http\Middleware;

use App\Mail\ConfirmEmail;
use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\HttpFoundation\Response;

class CheckUsersVerified
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (auth()->user()->email_verified_at == null) {
            $verification_code = rand(100000, 999999);
            session("verification_code", $verification_code);
            $user = User::find(auth()->user()->id);
            $user->verification_code = $verification_code;
            $user->save();
            Mail::to($user->email)->send(new ConfirmEmail($user, $verification_code));
            return redirect(route('verify', ['token' => $user->verification_token]));
        }
        return $next($request);
    }
}
