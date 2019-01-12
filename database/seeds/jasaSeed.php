<?php

use Illuminate\Database\Seeder;

class jasaSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jasa')->insert([
        	'nama' => 'Penyewaan Mobil',
        	'deskripsi' => 'Perlu menyewa mobil? Di sini tempatnya. Ke mana pun tujuan Anda, mobil apa pun yang Anda butuhkan, kami punya kuncinya. Cukup masukkan lokasi, tanggal pengambilan dan pengembalian, dan kami akan menemukan semua tawaran untuk Anda dari perusahaan penyewaan mobil terkemuka. Anda dapat membandingkan dan memesan mobil saat itu juga. ',
        	'urlslug' => 'penyewaan-mobil'
        ]);
    }
}
