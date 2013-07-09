<?php 

use App\Models\Article;

class ArticleTableSeeder extends Seeder {

	public function run()
	{
		DB::table('articles')->delete();

		Article::create(array(
			'title'		=> 'First Title',
			'author'	=> 'beginhq',
			'content'	=> 'Article Content'
		));
	}
}