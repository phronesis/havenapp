<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToAccountsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('accounts', function(Blueprint $table)
		{
			$table->foreign('account_status_id', 'fk_accounts_account_status1')->references('id')->on('account_status')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('account_type_id', 'fk_accounts_account_types1')->references('id')->on('account_types')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('accounts', function(Blueprint $table)
		{
			$table->dropForeign('fk_accounts_account_status1');
			$table->dropForeign('fk_accounts_account_types1');
		});
	}

}
