<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Exercise;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExerciseSeeder extends Seeder
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

      Exercise::create(['name' => 'Scott-Curls K.H.', 'category_id' => $bizeps_category]);
      Exercise::create(['name' => 'Schrägbank-Curls K.H.', 'category_id' => $bizeps_category]);
      Exercise::create(['name' => 'Hammer-Curls K.H.', 'category_id' => $bizeps_category]);
      Exercise::create(['name' => 'Konzentrations-Curls K.H.', 'category_id' => $bizeps_category]);
      Exercise::create(['name' => 'Scott-Curls Latzug einarmig', 'category_id' => $bizeps_category]);

      Exercise::create(['name' => 'Trizepsdrücken Latzug SZ-Stange', 'category_id' => $trizeps_category]);
      Exercise::create(['name' => 'Trizepsdrücken Latzug Y-Seil', 'category_id' => $trizeps_category]);
      Exercise::create(['name' => 'Trizepsdrücken Latzug einarmig', 'category_id' => $trizeps_category]);
      Exercise::create(['name' => 'Trizepsdrücken Latzug einarmig - reverse', 'category_id' => $trizeps_category]);
      Exercise::create(['name' => 'Trizepsdrücken K.H. liegend', 'category_id' => $trizeps_category]);
      Exercise::create(['name' => 'Trizepsdrücken K.H. über Kopf', 'category_id' => $trizeps_category]);

      Exercise::create(['name' => 'Seitheben Gewichtsmanschette', 'category_id' => $schulter_category]);
      Exercise::create(['name' => 'Seitheben Latzug', 'category_id' => $schulter_category]);
      Exercise::create(['name' => 'Schulterdrücken K.H.', 'category_id' => $schulter_category]);
      Exercise::create(['name' => 'Seitheben Expander - reverse', 'category_id' => $schulter_category]);
    }
}
