<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name'      => 'User',
                'username'  => 'user',
                'password'  => Hash::make('user'),
                'role'      => 'USER',
                'no_hp'     => '628231732112',
                'foto_profil'   => '628231732112',
                'rating'     => '3',
            ],
            [
                'name'      => 'Man',
                'username'  => 'man',
                'password'  => Hash::make('man'),
                'role'      => 'MANAGER',
                'no_hp'     => '6282317322112',
                'foto_profil'   => '6282317732112',
                'rating'     => '3',
            ],
            [
                'name'      => 'Cleaning',
                'username'  => 'cleaning',
                'password'  => Hash::make('cleaning'),
                'role'      => 'CLEANING',
                'no_hp'     => '6248231732112',
                'foto_profil'   => '6248231732112',
                'rating'     => '3',
            ],
            [
                'name'      => 'Security',
                'username'  => 'security',
                'password'  => Hash::make('security'),
                'role'      => 'SECURITY',
                'no_hp'     => '6248231732112',
                'foto_profil'   => '6248231732112',
                'rating'     => '3',
            ],
        ]);
    }
}
