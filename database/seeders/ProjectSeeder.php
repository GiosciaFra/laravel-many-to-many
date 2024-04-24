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
        $projetcs = [
            [
                'name' => 'Ciao',
                'description' => 'lorem ipsum',
                'img' => 'https://picsum.photos/200',
                'url' => 'https://github.com/GiosciaFra?tab=repositories',
            ],
        ];


        foreach ($projetcs as $project) {
            $newProject = new Project();

            $newProject->name = $project['name'];
            $newProject->description = $project['description'];
            $newProject->img = $project['img'];
            $newProject->url = $project['url'];

            $newProject->save();
        }
    }
}
