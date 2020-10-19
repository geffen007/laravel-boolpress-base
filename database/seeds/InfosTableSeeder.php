<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

use App\Info;
use App\User;

class InfosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run(Faker $faker){
        $users=User::all();

        foreach ($users as $user) {
            $newInfo = new Info();
            $newInfo->telephon = $faker->phoneNumber ;
            $newInfo->avatar = 'https://picsum.photos/200/300?random='.$faker->numberBetween($min = 1, $max = 100);
            // $newInfo->user_id = $faker->numberBetween($min = 1, $max = 10);
            $newInfo->user_id = $user->id;
            $newInfo->save();
        }
    }
}
