<?php

use Illuminate\Database\Seeder;
use App\Setting;
class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create([
            'site_name' => 'Alumni Fakultas Hukum',
            'tagline' => 'Ini Tagline',
            'about' => 'tentang kami',
            'email' => 'admin@admin.com',
        ]);
    }
}
