<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToRecordUploadsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('record_uploads', function(Blueprint $table)
		{
			$table->foreign('account_id', 'fk_record_uploads_accounts1')->references('id')->on('accounts')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('giving_channel_id', 'fk_record_uploads_giving_channel1')->references('id')->on('giving_channels')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('uploaded_by', 'fk_record_uploads_users1')->references('id')->on('users')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('record_uploads', function(Blueprint $table)
		{
			$table->dropForeign('fk_record_uploads_accounts1');
			$table->dropForeign('fk_record_uploads_giving_channel1');
			$table->dropForeign('fk_record_uploads_users1');
		});
	}

}
