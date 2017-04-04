<?php

use Illuminate\Database\Seeder;

use Bird\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        $user = new User();
        $user->name = 'Rogério Pereira';
        $user->email = 'rogerio@colmeiatecnologia.com.br';
        $user->password = bcrypt('123');
        $user->save();

        factory(User::class, 20)->create(); 
    }
}
