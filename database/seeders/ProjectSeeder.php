<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Project::create(['name' => 'Brusttraining', 'datum' => '2024-11-22']);
        Project::create(['name' => 'Rückentraining', 'datum' => '2024-11-22']);
        Project::create(['name' => 'Trizepstraining', 'datum' => '2024-11-21']);
        Project::create(['name' => 'Bizepstraining', 'datum' => '2024-11-21']);
        Project::create(['name' => 'Beintraining FTC', 'datum' => '2024-11-20']);
        Project::create(['name' => 'Schultertraining', 'datum' => '2024-11-20']);
        Project::create(['name' => 'Brusttraining', 'datum' => '2024-11-19']);
        Project::create(['name' => 'Rückentraining', 'datum' => '2024-11-19']);
        Project::create(['name' => 'Schultertraining', 'datum' => '2024-11-18']);
    }
}
