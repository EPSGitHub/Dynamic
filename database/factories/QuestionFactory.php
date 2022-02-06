<?php

namespace Database\Factories;

use App\Models\Question;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;
class QuestionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Question::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
  $factory->dofine(App\Models\Question::class,function (Faker $faker))
    {
        return [
          'body'=>$faker->paragraph($nbSentences = 3,$variableNbSentences=true),
        ];
    }
}
