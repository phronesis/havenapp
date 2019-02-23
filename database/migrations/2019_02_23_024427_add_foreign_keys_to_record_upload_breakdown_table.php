<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToRecordUploadBreakdownTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('record_upload_breakdown', function(Blueprint $table)
		{
			$table->foreign('categories_id', 'fk_record_upload_breakdown_categories1')->references('id')->on('categories')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('record_uploads_id', 'fk_record_upload_breakdown_record_uploads1')->references('id')->on('record_uploads')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('record_upload_breakdown', function(Blueprint $table)
		{
			$table->dropForeign('fk_record_upload_breakdown_categories1');
			$table->dropForeign('fk_record_upload_breakdown_record_uploads1');
		});
	}

}
