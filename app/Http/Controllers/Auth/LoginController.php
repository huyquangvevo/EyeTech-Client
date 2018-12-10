<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/home';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function login(Request $request)
    {
        $this->validateLogin($request);

        if ($this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);

            return $this->sendLockoutResponse($request);
        }
        $data = $request->all();
        $user = User::where('email', '=', $data['email'])->first();
        $isActive = $user->active;

        if ($isActive == true) {
            if ($this->attemptLogin($request)) {
                //login webservice
                $webservice_token = $this->getWebserviceToken($user->branch_id);
                $user->webservice_token = $webservice_token;
                $user->save();

                return $this->sendLoginResponse($request);
            }
        }

        $this->incrementLoginAttempts($request);

        return $this->sendFailedLoginResponse($request);
    }

    public function getWebserviceToken($branch_id)
    {
        $client = new \GuzzleHttp\Client();
        try {
            $res = $client->request('POST', 'http://localhost/eyetech/api/v1/users/client-login', [
                'form_params' => [
                    'branch_id' => $branch_id,
                ]
            ]);
        } catch (GuzzleException $e) {
            //
        }
        $data = json_decode($res->getBody()->getContents());

        return $data->webservice_token;
    }
}
