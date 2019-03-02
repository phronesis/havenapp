<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToGivingRecordsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('giving_records', function(Blueprint $table)
		{
			$table->foreign('accounts_id', 'fk_giving_records_accounts1')->references('id')->on('accounts')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('giving_channel_id', 'fk_giving_records_giving_channel1')->references('id')->on('giving_channels')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('giving_records', function(Blueprint $table)
		{
			$table->dropForeign('fk_giving_records_accounts1');
			$table->dropForeign('fk_giving_records_giving_channel1');
		});
	}

}
