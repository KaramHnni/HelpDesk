<?php

use Illuminate\Database\Seeder;

class DepartementsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(DB::table('departements')->count() == 0){
            DB::table('departements')->insert([
                'nom' => 'Informatique',
                
            ]);
            DB::table('departements')->insert([
                'nom' => 'Finances',
                
            ]);
            DB::table('departements')->insert([
                'nom' => 'Ressources Humaines',
                
            ]);
    }
}
}

