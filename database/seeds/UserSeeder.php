<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->create([
            'name'=> 'Mayerlin Bastidas',
            'email'=> 'mbastidas@ike.com',
            'password'=> bcrypt('laravel'),
        ]);

        factory(User::class, 48)->create();
    }
}
