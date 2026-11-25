<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Filiere;
class FiliereSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Filiere::create([
            'code' => 'DD',
            'nom' => 'Developpement digital',
            'descreption' => 'Formation oriente developpement logiciel',
        ]);
    }
}
