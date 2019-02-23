<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRecordUploadBreakdownTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('record_upload_breakdown', function(Blueprint $table)
		{
			$table->increments('id');
			$table->float('amount', 10, 0);
			$table->integer('record_uploads_id')->unsigned()->index('fk_record_upload_breakdown_record_uploads1_idx');
			$table->integer('categories_id')->unsigned()->index('fk_record_upload_breakdown_categories1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('record_upload_breakdown');
	}

}
