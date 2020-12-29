<?php namespace Go3solutions\Career\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateGo3solutionsCareerJob extends Migration
{
    public function up()
    {
        Schema::create('go3solutions_career_job', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title');
            $table->text('description')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('go3solutions_career_job');
    }
}
