<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        // ta có tham số bổ sung là $role (=quyền mà ta muốn yêu cầu)

        if (!Auth::user() || Auth::user()->role->name != $role) {
            return redirect()->route("login");
        }
        return $next($request);
    }

    // đăng ký middleware trong kernel.php
}
