<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\RegisterFormRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class RegisterController extends Controller
{
    public function index()
    {
        //
    }

    public function store(RegisterFormRequest $request)
    {
        $data = $request->all();

        $user = new User();
        $user->branch_id = $data['branch_id'];
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->password = bcrypt($data['password']);
        $user->save();

        $response = [
            'message' => 'User created',
            'user' => $user,
            'redirect' => route('login')
        ];

        return response()->json($response,200);
    }

    public function show($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
