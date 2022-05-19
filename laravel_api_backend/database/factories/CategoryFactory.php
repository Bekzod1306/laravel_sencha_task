<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Nette\Utils\Random;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'cat_type' => function(){
                
                $rand = rand(1,11);
                if($rand<6.5){
                    return 'Расход';
                }else{
                    return 'Даход';
                }
            },
            'cat_name' => $this->faker->name,
        ];
    }
}
