<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ObjetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('objets')->insert([
            [
            'name' => "Besoin de conseils",   
            ],
            [
            'name' => "Demande d'information supplémentaires",   
            ],
            [
            'name' => "Demande de devis",   
            ]
        ]);
    }
}
