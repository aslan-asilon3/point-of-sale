<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = array(
            [
                'name' => 'aslanadmin',
                'email' => 'aslanadmin@gmail.com',
                'password' => bcrypt('aslanadmin'),
                'foto' => '/img/user.jpg',
                'level' => 1
            ],
            [
                'name' => 'aslankasir',
                'email' => 'aslankasir@gmail.com',
                'password' => bcrypt('aslankasir'),
                'foto' => '/img/user.jpg',
                'level' => 2
            ]
        );

        array_map(function (array $user) {
            User::query()->updateOrCreate(
                ['email' => $user['email']],
                $user
            );
        }, $users);
    }
}
