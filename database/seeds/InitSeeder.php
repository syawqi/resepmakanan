<?php

use Illuminate\Database\Seeder;

class InitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $resep = new \App\Resep();
        $resepdetail = new \App\Resepdetail();
        $make = new \App\Make();

        $resep->name = 'Bingka Ambon';
        $resep->writter = 'Susiana';

        $resep->save();

        $resepdetail->resep_id = $resep->id;
        $resepdetail->bahan = 'Tepung Terigu';
        $resepdetail->unit = 'Kg';
        $resepdetail->qty = 1;

        $resepdetail->save();

        $make->resep_id = $resep->id;
        $make->step = 'Masukan Tepung terigu ke dalam baskom';

        $make->save();

    }
}
