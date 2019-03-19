<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_employee = new Role();
        $role_employee->name = 'view_analysis';
        $role_employee->display_name = 'View Analysis';
        $role_employee->description = 'Can view analysis';
        $role_employee->save();

        $role_employee = new Role();
        $role_employee->name = 'view_employees';
        $role_employee->display_name = 'View Employees';
        $role_employee->description = 'Can view employees';
        $role_employee->save();


        $role_employee = new Role();
        $role_employee->name = 'view_event';
        $role_employee->display_name = 'View Event';
        $role_employee->description = 'Can view event';
        $role_employee->save();
    }
}
