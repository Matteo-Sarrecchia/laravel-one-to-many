<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Project;

class projectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Project :: factory() -> count(20) -> create();

        foreach ($projects as $project) {
            
            $type = type :: inRandomOrder() -> first();

            $project -> type_id = $type -> id;
            $project -> save();
        }
    }
}
