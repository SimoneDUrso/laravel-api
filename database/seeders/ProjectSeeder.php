<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $newProject = new Project();
            $newProject->name = $faker->word();
            $newProject->date = $faker->date();
            $newProject->description = $faker->sentence(10);
            $newProject->image_project = $faker->imageUrl(400, 400);
            $newProject->slug = Project::generateSlug($newProject->name);

            $newProject->save();
        }
    }
}
