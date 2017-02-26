<?php

use Illuminate\Database\Seeder;

use Faker\Factory;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = new Factory('id_ID');

        $nis = 11422430;
        $rand = rand(0,1);
        $gender = ['male','female']; 
        for($i = 0; $i < 35; $i++)
        {
            User::create([
                'nis'       => $nis,
                'nama'      => str_random(10),
                'kelas'     => 'XII - RPL',
                'password'  => bcrypt(123456),
                'token'     => str_random(1000)
            ]);

            $nis++;
        }
    }
}
