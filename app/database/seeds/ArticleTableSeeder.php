<?php 

use App\Models\Article;

class ArticleTableSeeder extends Seeder {

	public function run()
	{
		DB::table('articles')->delete();

		Article::create(array(
			'title'		=> 'First Title',
			'author'	=> 'David Frank',
			'content'	=> '<h3>section</h3><p>test string.</p>'
		));

		Article::create(array(
			'title'		=> 'Second Title',
			'author'	=> 'David Frank',
			'content'	=> '<h3>section</h3><p>test string 2.</p>'
		));

		Article::create(array(
			'title'		=> '3rd Title',
			'author'	=> 'David Frank Jr.',
			'content'	=> '<h3>section</h3><p>test string 3.</p>'
		));
	}
}