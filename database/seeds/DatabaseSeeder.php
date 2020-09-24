<?php

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
        // dd(factory(App\User::class)->make()->toArray());
        //$this->call(UsersTableSeeder::class);
        factory(App\User::class, 50)->create()->each(function ($user) {
            $user->save(factory(App\User::class)->make()->toArray());
        });

        factory(App\Livres::class, 500)->create()->each(function ($user) {
            $user->livre()->save(factory(App\Livres::class)->make()->toArray());
        });

        factory(App\Emprunteurs::class, 50)->create()->each(function ($user) {
            $user->save(factory(App\Emprunteurs::class)->make()->toArray());
        });

    }
}
