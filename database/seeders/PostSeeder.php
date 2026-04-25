<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
    Post::create(['title' => 'My First Post', 'body' => 'This is my first post!']);
    Post::create(['title' => 'Learning Laravel', 'body' => 'Laravel is quite similar to Express.']);
    Post::create(['title' => 'Running on a Pi', 'body' => 'Served from a Pi Zero W.']);
}
}
