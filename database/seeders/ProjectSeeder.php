<?php

namespace Database\Seeders;
use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker)
    {
        for($i= 0; $i < 10; $i++){
            $new_project = new Project();
            $new_project->name = $faker->sentence(5);
            $new_project->description = $faker->text(500);
            $new_project->project_type = $faker->randomElement(['Front-End', 'Back-End', 'Full-stack']);
            $new_project->link = 'https://github.com/SabrinaGiancaspr/'. Str::slug($new_project->name);
            $new_project->project_stauts = $faker->randomElement(['in progress', 'done']);
            $new_project->save();
        }
    }
}
