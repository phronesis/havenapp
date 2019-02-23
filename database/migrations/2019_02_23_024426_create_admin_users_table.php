<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAdminUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('admin_users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('first_name')->nullable();
			$table->string('last_name')->nullable();
			$table->string('email');
			$table->string('password');
			$table->string('remember_token', 100)->nullable();
			$table->boolean('activated')->default(0);
			$table->boolean('forbidden')->default(0);
			$table->string('language', 2)->default('en');
			$table->softDeletes();
			$table->timestamps();
			$table->unique(['email','deleted_at']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('admin_users');
	}

}
