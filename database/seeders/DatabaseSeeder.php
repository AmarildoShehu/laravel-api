<?php

namespace Database\Seeders;
use App\Models\User;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Check if the user already exists
        $user = User::where('email', 'amarildo@ciao.it')->first();

        // If the user doesn't exist, create it
        if (!$user) {
            $user = User::create([
                'name' => 'Amarildo',
                'email' => 'amarildo@ciao.it',
                'password' => bcrypt('password'),
            ]);
            
        }

        // You can continue with the seeding process here
        
        // For example, seeding projects
        \App\Models\User::factory()->create();

        $this->call(TypeSeeder::class);

        \App\Models\Project::factory(5)->create();

        $this->call(TechnologySeeder::class);

        
    }
}
