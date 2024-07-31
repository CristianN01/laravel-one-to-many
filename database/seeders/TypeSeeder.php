<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $TypesName = [
            "HTML",
            "CSS",
            "LARAVEL",
            "JavaScript",
            "JAVA",
            "React",
            "Vue+Vite",
        ];

        foreach ($TypesName as $TypeName) {
            $type = new Type();
            $type->name = $TypeName;
            $type->color = $faker->unique()->safeHexColor();
            $type->save();
        }
    }
}
