<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_view_analysis = Role::where('name', 'view_analysis')->first();
        $role_view_employees  = Role::where('name', 'view_employees')->first();
        $role_view_event = Role::where('name', 'view_event')->first();

        $permission = new Permission();
        $permission->name = 'employee';
        $permission->display_name = 'Employee';
        $permission->description = 'Nhân viên cửa hàng';
        $permission->save();
        $permission->roles()->attach($role_view_event);

        $permission = new Permission();
        $permission->name = 'manager';
        $permission->display_name = 'Manager';
        $permission->description = 'Quản lý cửa hàng';
        $permission->save();
        $permission->roles()->attach($role_view_event);
        $permission->roles()->attach($role_view_analysis);
        $permission->roles()->attach($role_view_employees);
    }
}
