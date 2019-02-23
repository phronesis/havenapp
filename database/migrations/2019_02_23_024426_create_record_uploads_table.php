<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRecordUploadsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('record_uploads', function(Blueprint $table)
		{
			$table->increments('id');
			$table->float('amount', 10, 0);
			$table->timestamps();
			$table->string('uploader_comment')->nullable();
			$table->string('approver_comment')->nullable();
			$table->integer('account_id')->unsigned()->index('fk_record_uploads_accounts1_idx');
			$table->integer('uploaded_by')->unsigned()->index('fk_record_uploads_users1_idx');
			$table->integer('approved_by')->nullable();
			$table->integer('giving_channel_id')->unsigned()->index('fk_record_uploads_giving_channel1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('record_uploads');
	}

}
