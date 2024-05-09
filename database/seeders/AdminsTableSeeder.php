<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('admins')->delete();

        DB::table('admins')->insert(array(
            0 =>
            array(
                'id' => 1,
                'name' => 'admin',
                'email' => 'john@example.com',
                'email_verified_at' => '2024-03-27 11:36:17',
                'password' => Hash::make('password1'),
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
    }
}
