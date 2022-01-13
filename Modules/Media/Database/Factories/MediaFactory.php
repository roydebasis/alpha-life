<?php

namespace Modules\Media\Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Media\Entities\Media;

class MediaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Media::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'              => substr($this->faker->text(30), 0, -1),
            'slug'              => '',
            'type'              => $this->faker->randomElement(['photo', 'video']),
            'meta_title'        => '',
            'meta_keywords'     => '',
            'meta_description'  => '',
            'created_at'        => Carbon::now(),
            'updated_at'        => Carbon::now(),
        ];
    }
}
