<?php

namespace Database\Factories;

use App\Models\Link;
use Illuminate\Database\Eloquent\Factories\Factory;

class LinkFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Link::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'date'=> $this->faker->date('Y-m-d') ,
            'name'=> $this->faker->word (),
            'url'=> $this->faker->url()  ,
           // 'category'=>$this->faker->randomElements($postCategory),
           
            'user_id'=>1
            //
        ];
    }
}
