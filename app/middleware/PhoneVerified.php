<?php

/**

 * @author update jaryan 
 */

namespace Middleware;

use Core\Middleware;

final class PhoneVerified extends Middleware
{

    /**
     * Set Redirect 
     * @var string
     */
    protected $redirecto = "user/login";
    /**
     * Redirect Error message
     * @var string
     */
    protected $message = "You need to be verify your phone to access this page.";


    public function handle()
    {


        // jaryan update




        if (!\Core\Auth::check()) {
            return \Core\Helper::redirect()->to(route('login'));

        }
        $user = \Core\Auth::user();
        if ($user->phone_verify == false) {
            return \Core\Helper::redirect()->to(route('verify.phone'));

        }




        return true;
    }
}
