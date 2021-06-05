<?php

namespace Database\Seeders;

use App\Models\mahasiswaModel;
use Illuminate\Database\Seeder;

class mahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mhs1 = new mahasiswaModel();
        $mhs1->nbi = "1461900251";
        $mhs1->nama = "Teddy Sawon Setyo";
        $mhs1->save();

        $mhs2 = new mahasiswaModel();
        $mhs2->nbi = "1461900221";
        $mhs2->nama = "Joko Pratama";
        $mhs2->save();
    }
}
