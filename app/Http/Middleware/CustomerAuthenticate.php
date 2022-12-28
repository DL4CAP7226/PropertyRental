<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class CustomerAuthenticate extends Middleware
{   
    protected function authenticate($request ,array $guards)
    {
        if($this->auth->guard('customer')->check())
        {
            return $this->auth->shouldUse('customer');
        }
        
        $this->unauthenticated($request ,['customer']);
        
    }
    
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            return route('customer_signup');
        }
    }
}
