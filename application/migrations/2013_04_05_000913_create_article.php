<?php

class Create_Article {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('article', function($table){
			$table->increments('id');
			$table->string('title',30);
			$table->string('subtitle',30);
			$table->string('img_location',30);
			$table->string('tech_list',120);
			$table->text('content');
			$table->timestamps();
		});
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('article');
	}

}