<?php 

use App\Models\Article;

class ArticleTableSeeder extends Seeder {

	public function run()
	{
		DB::table('articles')->delete();

		Article::create(array(
			'title'		=> 'First Title',
			'date'      => '2013-07-17',
			'author'	=> 'David Frank',
			'content'	=> '<h3>section</h3><p>test string.</p>'
		));
	}
}