<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 5; $i++ ){
            DB::table('posts')->insert([
                'category_id' => rand(1, 10),
                'title' => 'post-' . $i,
                'description' => 'desc of post' . $i,
                'text' => '<p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry`s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>' . $i,
                'slug' => 'post-' . $i,
            ]);
        }
    }
}
