<?php

namespace App\Http\Middleware;

use App\Models\Role;
use Closure;
use Illuminate\Http\Request;

class CheckIsAdmin
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
        $role =Role::where('name','admin')->get();
        if($role->count()<1){
            Role::create([
                'name'=>'admin',
            ]);
        }
        $role =Role::where('name','admin')->first();
        // dd($role->id,
        // $request->user()->role_id
        // );
        if ($request->user()->role_id !== $role->id) {
            abort(401, 'This action is unauthorized.');
        }
        return $next($request);
    }
}
