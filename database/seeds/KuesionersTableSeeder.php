<?php

use Illuminate\Database\Seeder;

class KuesionersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $juduls = [
            'KARAKTERISTIK SOSIO-BIOGRAFI, PENDIDIKAN DAN PEKERJAAN',
            'KEGIATAN PENDIDIKAN DAN PENGALAMAN PEMBELAJARAN',
            'PENCARIAN KERJA DAN TRANSISI KE DUNIA KERJA',
            'PEKERJAAN',
            'PEKERJAAN DAN KOMPETENSI, HUBUNGAN ANTARA STUDI DENGAN PEKERJAAN'
        ];

        foreach($juduls as $judul):
            App\Kuesioner::create([
                'judul' => $judul
            ]);
        endforeach;
    }
}
