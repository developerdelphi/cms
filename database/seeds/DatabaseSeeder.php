<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        App\User::create([
            'name' => 'Leo Buchner',
            'email' => 'developerdelphi@gmail.com',
            'password' => Hash::make('password')
        ]);

        factory(App\User::class, 7)->create();

        App\Page::create([
            'parent_id' => null,
            'title' => 'Quem somos',
            'slug' => 'quem-somos',
            'body' => 'Descrição de quem somos...'
        ]);
        App\Page::create([
            'parent_id' => 1,
            'title' => 'Missão',
            'slug' => 'missao',
            'body' => 'Descrição de Missão.'
        ]);
        App\Page::create([
            'parent_id' => 1,
            'title' => 'Visão',
            'slug' => 'visao',
            'body' => 'Descrição de visão...'
        ]);
    }
}
