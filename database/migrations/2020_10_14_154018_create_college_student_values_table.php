<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateCollegeStudentValuesTable.
 */
class CreateCollegeStudentValuesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('college_student_values', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->unsignedInteger('college_student_id');
			$table->unsignedBigInteger('value');
			$table->timestamps();
			$table->foreign('college_student_id')->references('id')->on('college_students')
				->onUpdate('cascade')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('college_student_values');
	}
}
