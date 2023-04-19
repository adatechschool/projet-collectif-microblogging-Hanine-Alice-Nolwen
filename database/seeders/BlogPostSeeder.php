<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\BlogPost::factory(10)->create();

        \App\Models\BlogPost::factory()->create([
            'title' => 'Test title',
            'content' => 'Test content',
            'picture' => 'https://test.com',
        ]);
    }
}
