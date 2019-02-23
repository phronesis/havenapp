<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAccountUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('account_users', function(Blueprint $table)
		{
			$table->integer('user_id')->unsigned()->index('fk_account_users_users1_idx');
			$table->integer('account_id')->unsigned()->index('fk_account_users_accounts1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('account_users');
	}

}
