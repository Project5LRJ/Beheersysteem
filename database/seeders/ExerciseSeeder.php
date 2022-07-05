<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExerciseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('exercises')->insert([
            'title_NL' => 'Squat',
            'title_ENG' => 'Squat',
            'description_NL' => '',
            'description_ENG' => ''
        ]);

        DB::table('exercises')->insert([
            'title_NL' => 'Push-up',
            'title_ENG' => 'Push-up',
            'description_NL' => '',
            'description_ENG' => ''
        ]);

        DB::table('exercises')->insert([
            'title_NL' => 'Dip',
            'title_ENG' => 'Dip',
            'description_NL' => '',
            'description_ENG' => ''
        ]);

        DB::table('exercises')->insert([
            'title_NL' => 'Plank',
            'title_ENG' => 'Plank',
            'description_NL' => '',
            'description_ENG' => ''
        ]);

        DB::table('exercises')->insert([
            'title_NL' => 'Paardentrap',
            'title_ENG' => 'Donkey kicks',
            'description_NL' => '',
            'description_ENG' => ''
        ]);

        DB::table('exercises')->insert([
            'title_NL' => 'Mountain climber',
            'title_ENG' => 'Mountain climber',
            'description_NL' => '',
            'description_ENG' => ''
        ]);

        DB::table('exercises')->insert([
            'title_NL' => 'Burpee',
            'title_ENG' => 'Burpee',
            'description_NL' => '',
            'description_ENG' => ''
        ]);

        DB::table('exercises')->insert([
            'title_NL' => 'Lunge',
            'title_ENG' => 'Lunge',
            'description_NL' => '',
            'description_ENG' => ''
        ]);

        DB::table('exercises')->insert([
            'title_NL' => 'Wall sit',
            'title_ENG' => 'Wall sit',
            'description_NL' => '',
            'description_ENG' => ''
        ]);

        DB::table('exercises')->insert([
            'title_NL' => 'Crunch',
            'title_ENG' => 'Crunch',
            'description_NL' => '',
            'description_ENG' => ''
        ]);
    }
}
