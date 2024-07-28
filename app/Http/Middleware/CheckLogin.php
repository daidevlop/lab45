<?php

namespace App\Http\Middleware;

use App\Models\account;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {
            $user = Auth::user();
            $acc = account::where('email', $user->email)->first();
            // dd($acc);
            if ($acc->type == '1-Truong phong') {
                return $next($request);
            } else {
                Auth::logout();
                return redirect()->route('login')->with('errr','ban ko co quyen dang nhap');
            }
        }

        return redirect()->route('login');
    }
}
