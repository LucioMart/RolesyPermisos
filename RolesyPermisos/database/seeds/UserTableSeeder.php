<?php

use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_employee = Role::where('name', 'employee')->first();
        $employee = new User();

        $employee->name = 'Employee Name';
        $employee->description = 'employee@example.com';
        $employee->password = bcrypt('secret');
        $employee->save();

        $employee->role()->attach($role_employee);
        $manager = new User();
        $manager->name = 'Manager Name';
        $manager->description = 'manager@example.com';
        $manager->save();
        $manager->roles()->attach($role_manager);
    }
}
