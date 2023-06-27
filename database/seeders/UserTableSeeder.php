<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\Hash;
use DB;
use App\Models\Roles;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::truncate();
        $adminRoles = Roles::where('name', 'admin')->first();
        $userRoles = Roles::where('name', 'author')->first();
        $authorRoles = Roles::where('name', 'user')->first();
        $admin = Admin::create([
            'name' => 'thaoadmin',
            'email' => 'thaoadmin@yahoo.com',
            'phone' => '123456789',
            'password' => '123456',
        ]);
        $author = Admin::create([
            'name' => 'thaoauthor',
            'email' => 'thaoauthor@yahoo.com',
            'phone' => '123456789',
            'password' => '123456',
        ]);
        $user = Admin::create([
            'name' => 'thaouser',
            'email' => 'thaouser@yahoo.com',
            'phone' => '123456789',
            'password' => '123456',
        ]);
        $admin->roles()->attach($adminRoles);
        $author->roles()->attach($authorRoles);
        $user->roles()->attach($userRoles);
    }
}
