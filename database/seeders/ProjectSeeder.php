<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Project::create([
            'name' => 'Nome del tuo progetto',
            'description' => 'Descrizione del tuo progetto',
        ]);

        
    }
}
