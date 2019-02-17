<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCategoriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('categories', function(Blueprint $table)
		{
			$table->foreign('account_types_id', 'fk_categories_account_types1')->references('id')->on('account_types')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('categories', function(Blueprint $table)
		{
			$table->dropForeign('fk_categories_account_types1');
		});
	}

}
