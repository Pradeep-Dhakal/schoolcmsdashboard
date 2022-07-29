<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;



class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = array(
            array(
                'name'=>'Admin',
                'email'=>'web@schoolcms.com',
                'password'=>Hash::make('admin002'),
                'role'=>'admin',
            )
        );
        DB::table('admins')->insert($users);
    }
}
