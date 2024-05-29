<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Misalkan Anda memiliki cara lain untuk menentukan apakah pengguna adalah admin
        if ($request->user()->is_admin) {
            return $next($request);
        }

        // Jika bukan admin, arahkan ke halaman yang sesuai
        return redirect('/'); // Atau arahkan ke halaman lain yang sesuai dengan kebutuhan Anda
    }
}
