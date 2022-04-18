<?php

namespace Modules\Management\Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Management\Entities\Management;

class ManagementFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Management::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'              => substr($this->faker->text(30), 0, -1),
            'designation'              => '',
            'image'    => 'https://picsum.photos/1200/630',
            'status'            => 1,
            'category_id'       => $this->faker->numberBetween(1, 5),
            'meta_title'        => '',
            'meta_keywords'     => '',
            'meta_description'  => '',
            'created_by_name'   => '',
            'created_at'        => Carbon::now(),
            'updated_at'        => Carbon::now(),
        ];
    }
}
