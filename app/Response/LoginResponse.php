<?php

namespace App\Response;

use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;

class LoginResponse implements LoginResponseContract
{
    /**

     * Create an HTTP response that represents the object.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Symfony\Component\HttpFoundation\Response
     */

    public function toResponse($request)
    {
        $redirectRoute = "";

        if (session()->has('users')) {
            $redirectRoute = session()->pull('url.intended');
        } else {
            $redirectRoute = auth()->user()->isAdmin() ? '/admin/' : '/dashboard';
        }

        return redirect()->intended($redirectRoute);
    }
}
