<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Permission;
use Illuminate\Support\Facades\Auth;

class EmployeeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index() {
        $logout_route = route('custom-logout');
        $users = User::all();
        return view('employees.index', compact('users','logout_route'));
    }

    public function show($id) {
        $logout_route = route('custom-logout');
        $user = User::find($id);
        $permission = $user->getPermission();
        return view('employees.show',compact('logout_route', 'user', 'permission'));
    }

    public function create() {
        $logout_route = route('custom-logout');
        return view('employees.create', compact('logout_route'));
    }

    public function store(Request $request) {
        $request->validate([
            'name'=>'required',
            'email'=> 'required|email',
            'password' => 'required|min:6'
        ]);

        $user = new User([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'branch_id' => Auth::user()->branch_id,
            'active' => $request->active,
        ]);
        $user->save();
        $permission = $request->permission;
        $user->permissions()->attach(Permission::where('name', $permission)->first());
        return redirect('/employees')->with('success', 'Thêm mới nhân viên thành công!');
    }

    public function edit($id) {
        $logout_route = route('custom-logout');
        $user = User::find($id);
        $permission = $user->getPermission();
        return view('employees.edit',compact('user','logout_route', 'permission'));
    }

    public function update(Request $request,$id) {
        $request->validate([
            'name'=>'required',
            'email'=> 'required|email',
//            'password' => 'min:6'
        ]);
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->active = $request->active;
        if($user->password != bcrypt($request->password)) {
            $user->password == bcrypt($request->password);
        };
        $user->save();
        $permission = $user->getPermission();
        if($permission->name != $request->permission) {
            $user->permissions()->detach(Permission::where('name', $permission->name)->first());
            $user->permissions()->attach(Permission::where('name', $request->permission)->first());
        }
        return redirect('/employees')->with('success', 'Cập nhật thông tin nhân viên thành công!');
    }

    public function destroy($id) {
        $user = User::find($id);
        $user->delete();

        return redirect('/employees')->with('success', 'Xóa nhân viên thành công!');
    }

}
