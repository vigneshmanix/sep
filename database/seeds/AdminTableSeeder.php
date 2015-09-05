<?php
 
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
 
class AdminTableSeeder extends Seeder {
 
    public function run()
    {
    DB::table('admin')->insert([
            'admin_handle' => "admin",
            'admin_name' => "admin",
            'admin_post'=>"developer",
            'admin_password' => "e5e9fa1ba31ecd1ae84f75caaa474f3a663f05f4",

        ]);
    }
}    