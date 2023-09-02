<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@test.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ]);
        
        \App\Models\Manufacturer::factory(10)->create();

        $categories = ['Electronics', 'Hydraulics', 'Mechanics', 'Tools'];
        
        foreach($categories as $category) {
            \App\Models\Category::factory()->create([
                'category' => $category,
            ]);
        }

        \App\Models\PartsMasterList::factory(100)->create();
    }
}
