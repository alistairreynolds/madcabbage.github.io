<?php

namespace App\Http\Middleware;

use Closure;

class redirectIfNotAdmin
{
    /**
     * Handle an incoming request.
     * Redirects the page to the index page if the user is not an administrator
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        if(! $request->user()->isAdmin()) {
            // add a flash message
            return redirect('/films')->with([
                'flash_message_class' => 'warning',
                'flash_message' => 'You do not have permission to access this area'
            ]);
        }

        return $next($request);
    }
}
