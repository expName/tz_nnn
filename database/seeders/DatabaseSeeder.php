<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // \App\Models\User::factory(10)->create();
        \App\Models\Dolgnost::factory(1)->create();
        \App\Models\Dolgnost::factory(1)->create([
             'name' => 'admin',
         ]);
        \App\Models\Dolgnost::factory(1)->create([
             'name' => 'manager',
         ]);
        \App\Models\User::factory(1)->create([
            'name' => 'userName',
            'email' => 'userName@mail.com',
            'password' => Hash::make('userName123'),
            'image' => '20221014040039.png'
        ]);
        \App\Models\User::factory(1)->create([
            'name' => 'admin',
            'dolgnost_id' => '2',
            'email' => 'admin@mail.com',
            'password' => Hash::make('admin123'),
            'image' => '20221014040039.png'
        ]);
        \App\Models\User::factory(1)->create([
            'name' => 'manager',
            'dolgnost_id' => '3',
            'email' => 'manager@mail.com',
            'password' => Hash::make('manager123'),
            'image' => '20221014040039.png'
        ]);
        \App\Models\Otdel::factory(1)->create([
            'name' => 'Отдел_кадров',
            'user_id' => '3'
        ]);
        \App\Models\Otdel::factory(1)->create([
            'name' => 'Отдел_охраны',
            'user_id' => '2'
        ]);
        \App\Models\Otdel::factory(1)->create([
            'name' => 'Бухгалтерия'
        ]);
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
