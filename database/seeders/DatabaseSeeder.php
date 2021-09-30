<?php

namespace Database\Seeders;

use App\Models\Question;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(3)->create()->each(function ($u) {
            $u->questions()->saveMany
            (Question::factory( rand(1, 5))->make()
            );
        });
        Question::factory(10)->create();
    }
}
