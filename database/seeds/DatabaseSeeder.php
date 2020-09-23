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
        //$this->call(UsersTableSeeder::class);
        factory(App\User::class, 50)->create()->each(function ($user) {
            $user->livres()->save(factory(App\User::class)->make());
        });

        factory(App\Livres::class, 500)->create()->each(function ($user) {
            $user->users()->save(factory(App\Livres::class)->make());
        });

        factory(App\Emprunts::class, 100)->create()->each(function ($data) {
            $data->emprunter()->save(factory(App\Emprunteurs::class)->make());
        });
    }
}
