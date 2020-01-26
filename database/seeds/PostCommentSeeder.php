<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PostCommentSeeder extends Seeder
{
    public function run()
    {
        DB::table('posts')->insert([
            'title' => "aaa",
            'cat_id' => '1',
            'content' => "aaabbbccc",
            'comment_count' => 1,
        ]);
    }
}
