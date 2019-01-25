<?php

use Illuminate\Database\Seeder;

class AdministrateurTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(DB::table('administrateurs')->count() == 0){
            DB::table('administrateurs')->insert([
                'nom' => 'admin1',
                'prenom' =>'admin',
                'email' => 'admin1@gmail.com',
                'password' => bcrypt('123456'),
                'status' => 1,
            ]);
    }
}
}
