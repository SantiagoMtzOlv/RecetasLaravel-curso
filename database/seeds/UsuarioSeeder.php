<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Santiago',
            'email' => 'martisamo@gmail.com',
            'password' => Hash::make('12345678'),
            'url' => 'http://google.com',
        ]);

        $user2 = User::create([
            'name' => 'Ariel',
            'email' => 'santaigo.mtzolv@gmail.com',
            'password' => Hash::make('12345678'),
            'url' => 'http://google.com',
        ]);
    }
}
