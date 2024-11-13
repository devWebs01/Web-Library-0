<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::create([
            "name"=> "",
            "logo"=> "https://lh5.googleusercontent.com/FmCd1EEXYc-bRU4n36xnCKzc4X8JeOlYV-KvWs8bp7Le0zyaSz_P7HMryUQtIwt82JvYy0MNNlij93ke32Zq_oVBtrO6V5AwB710ltrmWopbAjK7o5f1NPRZSs2bpw1t3w=w1280",
            "desc"=> "Jl. Liposos II No.Rt. 08, Kelurahan Bakung Jaya, Kecamatan Paal Merah, Kota Jambi, Jambi 36139",
        ]);
    }
}
