<?php

use Illuminate\Database\Seeder;
use App\Profile;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //admin seed
        $admin = App\User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('123123'),
            'role_id' => 1
        ]);
        Profile::create([
            'nama_lengkap' => $admin->name,
            'user_id' => $admin->id,
            'nrp' => '10000'
        ]);

        //alumni seed
        $alumni = App\User::create([
            'name' => 'Baskoro',
            'email' => 's6134117@student.ubaya.ac.id',
            'password' => bcrypt('123123'),
            'role_id' => 2,
        ]);
        Profile::create([
            'nama_lengkap' => $alumni->name,
            'user_id' => $alumni->id,
            'nrp' => '6134117',
            'jenis_kelamin' => 1,
            'asal_smu' => 'SMAN 5 Malang',
            'kota_smu' => 'Malang',
        ]);
    }
}
