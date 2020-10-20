<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

use App\Review;
use App\User;

class ReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $users=User::all();
        for($i=0; $i < 50; $i++){
            $newReview = new Review();
            $newReview->title = $faker->text(30);
            $newReview->textReview = $faker->text(500);
            $newReview->user_id = $users->random()->id;
            $newReview->save();
        }
    }
}
