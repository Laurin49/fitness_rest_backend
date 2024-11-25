<?php

namespace Database\Seeders;

use App\Models\Category;
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
    $brust_category = Category::where('name', 'Brust')->first()->id;
    $ruecken_category = Category::where('name', 'Rücken')->first()->id;
    $schulter_category = Category::where('name', 'Schultern')->first()->id;
    $bizeps_category = Category::where('name', 'Bizeps')->first()->id;
    $trizeps_category = Category::where('name', 'Trizeps')->first()->id;
    $bein_category = Category::where('name', 'Beine')->first()->id;
    
    Project::create(['name' => 'Brusttraining', 'datum' => '2024-11-22', 'category_id' => $brust_category]);
    Project::create(['name' => 'Rückentraining', 'datum' => '2024-11-22', 'category_id' => $ruecken_category]);
    Project::create(['name' => 'Trizepstraining', 'datum' => '2024-11-21', 'category_id' => $trizeps_category]);
    Project::create(['name' => 'Bizepstraining', 'datum' => '2024-11-21', 'category_id' => $bizeps_category]);
    Project::create(['name' => 'Beintraining FTC', 'datum' => '2024-11-20', 'category_id' => $bein_category]);
    Project::create(['name' => 'Schultertraining', 'datum' => '2024-11-20', 'category_id' => $schulter_category]);
    Project::create(['name' => 'Brusttraining', 'datum' => '2024-11-19', 'category_id' => $brust_category]);
    Project::create(['name' => 'Rückentraining', 'datum' => '2024-11-19', 'category_id' => $ruecken_category]);
    Project::create(['name' => 'Schultertraining', 'datum' => '2024-11-18', 'category_id' => $schulter_category]);
  }
}
