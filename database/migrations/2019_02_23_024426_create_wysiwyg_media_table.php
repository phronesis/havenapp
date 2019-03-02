<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWysiwygMediaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('wysiwyg_media', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('file_path');
			$table->integer('wysiwygable_id')->unsigned()->nullable()->index();
			$table->string('wysiwygable_type')->nullable();
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('wysiwyg_media');
	}

}
