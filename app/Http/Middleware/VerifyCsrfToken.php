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
        'api/*'
    ];

     protected function tokensMatch($request){
        $token = $request->ajax() ? $request->header('XCSRF-Token') : $request->input('_token');
        //dd($request->header('XCSRF-Token')."--------".$request->input('_token')."-----".$request->session()->token());
        return $request->session()->token() == $token;
        //return true;
    }

}
