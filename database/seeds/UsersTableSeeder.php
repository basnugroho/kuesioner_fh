<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('123123'),
            'role_id' => 1
        ]);
        App\User::create([
            'name' => 'Baskoro',
            'email' => 's6134117@student.ubaya.ac.id',
            'password' => bcrypt('123123'),
            'role_id' => 2,
            'nrp' => 6134117
        ]);
    }
}
