<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGivingRecordsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('giving_records', function(Blueprint $table)
		{
			$table->increments('id');
			$table->float('amount', 10, 0);
			$table->string('currency', 45)->nullable();
			$table->timestamps();
			$table->integer('giving_channel_id')->unsigned()->index('fk_giving_records_giving_channel1_idx');
			$table->integer('accounts_id')->unsigned()->index('fk_giving_records_accounts1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('giving_records');
	}

}
