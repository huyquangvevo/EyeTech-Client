<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Permission;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permission_manager = Permission::where('name', 'manager')->first();
        $permission_employee = Permission::where('name', 'employee')->first();

        $user = new User();
        $user->branch_id = 4;
        $user->name = 'duy';
        $user->email = 'duy@gmail.com';
        $user->password = bcrypt(123456);
        $user->active = '1';
        $user->save();
        $user->permissions()->attach($permission_manager);

        $user = new User();
        $user->branch_id = 4;
        $user->name = 'van';
        $user->email = 'van@gmail.com';
        $user->password = bcrypt(123456);
        $user->active = '1';
        $user->save();
        $user->permissions()->attach($permission_employee);
    }
}
