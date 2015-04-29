<?php


class PostsTableSeeder extends Seeder {

	public function run()
	{
		$Post = [
            ['title' => 'My First Post'],
            ['title' => 'My Second Post']
        ];
        DB::table('Posts')->insert($Post);
	}

}