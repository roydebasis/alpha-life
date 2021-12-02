<?php

namespace Modules\Service\Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Modules\Service\Entities\Service;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        for ($i = 0; $i < 50; $i++) {
            Service::create([
                'name' => $faker->sentence(10),
                'slug' => $faker->slug(),
                'intro' => $faker->paragraph(3, true),
                'content' => $faker->text(300),
                'is_featured' => rand(0, 1),
                'featured_image' => '/storage/files/placeholder.png',
                'meta_title' => $faker->text(20),
                'meta_keywords' => $faker->word(),
                'meta_description' => $faker->sentence(6, true),
            ]);
        }
    }
}
