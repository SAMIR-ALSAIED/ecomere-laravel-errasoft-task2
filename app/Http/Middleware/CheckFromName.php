<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckFromName
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next , string $role): Response
    {
    
        // $name='samir';

        $user=User::inRandomOrder()->value('id');


        if($user !=$role){

            dd("dddd");
        }

        return $next($request);
    }
}
