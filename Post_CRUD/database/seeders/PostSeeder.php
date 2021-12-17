<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 10; $i++) { 
            $post = new Post();   
            $post->fill([
                'title' => Str::random(50),
                'body' => Str::random(300),
                'author' => Str::random(15),
                'category' => Str::random(30),
                "post_format" => 'Standard',
                "post_status" => 'Active',
                "view" => rand(0, 5000),
                "like" => rand(0, 3000),
                "unlike" => rand(0, 100),
                "share" => rand(0, 500),
               // "active" =>date('HH:MI:SS'),
                "published_at" => date('Y-m-d')
            ])->save();
        }     
    }
}
