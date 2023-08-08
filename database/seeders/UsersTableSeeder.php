<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /*DB::table('users')->insert([
            'name' => 'Danilo Fernandes da Silva',
            'email' => 'danilofernandes1987@gmail.com',
            'password' => bcrypt('laravel'),
            'moderador' => 1,
            'created_at' => now(),
        ]);*/

        $users = User::factory()->count(10)->create();
    }
}
