<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateCollegeStudentsTable.
 */
class CreateCollegeStudentsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('college_students', function(Blueprint $table) {
            $table->increments('id');
			$table->bigInteger('nim');
			$table->string('name')->unique();
			$table->string('email');
			$table->string('class');
			$table->string('photo');
			$table->timestamps();
            $table->softDeletes();
		});
	}
	
	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('college_students');
	}
}
