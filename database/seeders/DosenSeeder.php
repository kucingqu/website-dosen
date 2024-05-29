<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $dosen = [
            ['id'=>'11a', 'nidn' => 111,'nama_dosen' => 'Ujang','usia' => '37','jenis_kelamin' => 'pria'],
            ['id'=>'12b', 'nidn' => 112,'nama_dosen' => 'Riyan','usia' => '25','jenis_kelamin' => 'pria'],
            ['id'=>'13c', 'nidn' => 113,'nama_dosen' => 'Evi','usia' => '22','jenis_kelamin' => 'wanita'],
            ['id'=>'14d', 'nidn' => 114,'nama_dosen' => 'Rina','usia' => '32','jenis_kelamin' => 'wanita'],
        ];
        DB::table('dosen')->insert($dosen);
    }
}
