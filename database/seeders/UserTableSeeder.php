<?php

namespace Database\Seeders;
use App\Models\Admin;
use DB;
use App\Models\Roles;
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
        Admin::truncate();
        DB::table('admin_roles')->truncate();

        $adminRoles = Roles::where('name','admin')->first();
        $authorRoles = Roles::where('name','author')->first();
        $userRoles = Roles::where('name','user')->first();

        $admin = Admin::create([
            'admin_name' => 'admin',
            'admin_email' => 'admin@gmail.com',
            'admin_phone' => '123456789',
            'admin_password' => md5('123456')
        ]);

        $author = Admin::create([
            'admin_name' => 'adminauthor',
            'admin_email' => 'namauthor@yahoo.com',
            'admin_phone' => '123456789',
            'admin_password' => md5('123456')
        ]);

        $user = Admin::create([
            'admin_name' => 'namuser',
            'admin_email' => 'namuser@yahoo.com',
            'admin_phone' => '123456789',
            'admin_password' => md5('123456')
        ]);

        $admin->roles()->attach($adminRoles);
        $author->roles()->attach($authorRoles);
        $user->roles()->attach($userRoles);

    

    }
}
