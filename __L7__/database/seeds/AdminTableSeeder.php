<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = factory('App\User')->create([
            'name'      => 'admin',
            'role_id'   => 1,
            'email'     => 'admin@admin.com',
            'password'  => bcrypt('Admin123456'),
        ]);
    }
}
