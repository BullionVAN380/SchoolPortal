<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userObj = new User();
        $userObj->name = 'User Josphat Baraka';
        $userObj->email = 'userjosphatbaraka@gmail.com';
        $userObj->password = Hash::make('0987654321');
        $userObj->type = 0;
        $userObj->save();

        $adminObj = new User();
        $adminObj->name = 'Admin Josphat Baraka';
        $adminObj->email = 'adminjosphatbaraka@gmail.com';
        $adminObj->password = Hash::make('0987654321');
        $adminObj->type = 1;
        $adminObj->save();

        $superAdminObj = new User();
        $superAdminObj->name = 'Super Josphat Baraka';
        $superAdminObj->email = 'superadminjosphatbaraka@gmail.com';
        $superAdminObj->password = Hash::make('0987654321');
        $superAdminObj->type = 2;
        $superAdminObj->save();

    }
}
