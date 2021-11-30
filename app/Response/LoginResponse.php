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
        $home = auth()->user()->isAdmin() ? '/admin/' : '/dashboard';

        return redirect()->intended($home);
    }
}
