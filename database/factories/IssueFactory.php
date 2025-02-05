<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Issue;

class IssueFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Issue::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'project_id' => fake()->randomNumber(),
            'title' => fake()->sentence(4),
            'description' => fake()->text(),
            'status' => fake()->word(),
            'priority' => fake()->word(),
            'assignee_id' => fake()->word(),
        ];
    }
}
