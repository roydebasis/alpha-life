<?php

namespace Modules\Quote\Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Quote\Entities\Quote;

class QuoteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Quote::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'              => substr($this->faker->text(30), 0, -1),
            'description'              => substr($this->faker->text(30), 0, -1),
            'image'              => '',
            'url'        => '',
            'quote_by'     => '',
            'created_at'        => Carbon::now(),
            'updated_at'        => Carbon::now(),
        ];
    }
}
