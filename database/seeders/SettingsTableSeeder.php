<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * Reset the site_settings table
         */


        DB::table('settings')->insert([
            'title'           => 'SCALAR',
            'email'           => 'info@scalar.com',
            'phone'           => '123456789',
            'address'         => '008 City of Work ,<br>New York, NY 641109 US.',
            'dark-logo'       => 'dark-logo.png',
            'logo'            => 'logo.png',
            'favicon'         => 'favicon.png',
            'facebook'        => 'facebook.com',
            'twitter'         => 'twitter.com',
            'instagram'       => 'instagram.com',
            'linkedin'        => 'linkedin.com',
            'footer_scripts'  => '',
            'footer_sentence' => '© 2024  Designed and Develop by <a href="http://expertwebcraft.com/">Expert Web Craft</a>',
            'copyright'       => 'SCALAR',
            'created_at'      => date('Y-m-d H:i:s'),
            'updated_at'      => date('Y-m-d H:i:s')
        ]);
    }
}
