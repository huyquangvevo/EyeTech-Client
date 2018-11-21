<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use GuzzleHttp;

class RegisterController extends Controller
{
    use RegistersUsers;

    protected $redirectTo = '/home';

    public function __construct()
    {
        $this->middleware('guest');

//        $client = new GuzzleHttp\Client();
//        $request = $client->request('GET', 'http://202.191.56.249/eyetech/api/v1/list-stores-id');
//        $res = json_decode($request->getBody());
//        $storeArrJson = $res->stores_id;
//        foreach ($storeArrJson as $store) {
//            array_push($this->storeArr, $store->id);
//        }
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'store' => ['required'],
            'branch' => ['required'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);
    }

    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    protected function register(Request $request)
    {
        $this->validator($request->all())->validate();
        $data = $request->all();

        $user = new User();
        $user->branch_id = 0;
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->password = bcrypt($data['password']);
        $user->save();

        return redirect()->route('login')->with('message', 'Please wait to verify account!');

    }
}
