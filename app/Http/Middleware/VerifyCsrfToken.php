<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as BaseVerifier;

class VerifyCsrfToken extends BaseVerifier
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        //
    ];

    protected function isReading($request)
    {
        return in_array($request->method(), ['HEAD', 'GET', 'OPTIONS','POST','PUT','DELETE']);
    }

    /** 14      * Determine if the session and input CSRF tokens match. 15      * 16      * @param \Illuminate\Http\Request $request 17      * @return bool 18      */
    protected function tokensMatch($request)  { 
    // If request is an ajax request, then check to see if token matches token provider in 22         
    // the header. This way, we can use CSRF protection in ajax requests also. 23         
    $token = $request->ajax() ? $request->header('X-CSRF-Token') : $request->input('_token');       
    return $request->session()->token() == $token;
    }
}