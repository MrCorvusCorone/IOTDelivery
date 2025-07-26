<?php

namespace App\Http\Middleware;

use App\Models\UserRole;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class VerifyIsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Ambil data user_role_id di table users
        $user_role_id = $request->user()->user_role_id;

        // Ambil data id di table user_roles
        $role_id = UserRole::where('name', 'admin')->first()->id;

        // Jika user_role_id dari pengakses tidak sama dengan id admin di table user_roles, maka redirect('/dashboar') untuk mencegahnya mengakses route tujuan
        if ($user_role_id != $role_id) {
            return redirect('/dashboard');
        }

        // Jika user_role_id dari pengakses sama dengan id admin di table user_roles, maka lanjutkan ke route tujuan 
        return $next($request);
    }
}
