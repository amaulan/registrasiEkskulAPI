<?php

use Illuminate\Database\Seeder;

use App\Ekskul;

class EkskulSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pembina = [
            'Dudung Zulkipli',
            'Dwi Murtikah',
            'Dedi S KOM',
            'Lia Rohmanisa',
            'Dudung Zulkipli',
            'Dwi Murtikah',
            'Dedi S KOM',
            'Lia Rohmanisa',
            'Lia Rohmanisa'
        ];

        $ekskul = [
            'Paskibra' , 
            'PMR' , 
            'PRAMUKA' , 
            'Marching Band' , 
            'Pencak Silat Singa Baruang',
            'Rohani Islam',
            'STEPA Pecinta Alam',
            'Catur',
            'Japanese Club',
            'English Club'
        ];

        for($i = 0; $i < count($ekskul)-1; $i++)
        {
            Ekskul::create([
                'ekskul_nama' => $ekskul[$i],
                'pembina' => $ekskul[$i],
                'desc'    => 'lwpeojfpowejfpowejfpowejfpojwefpojwpoj pojpo jpoj pojpo jpojp ojpojpojp ojpoj poj',
                'picture' => ' dffdb'
            ]);
        }
        // var_dump($pembina);
    }
}
