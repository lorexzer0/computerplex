<?php namespace Lorex\Computerplexoverride\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateLorexComputerplexoverrideStoragestatus extends Migration
{
    public function up()
    {
        Schema::create('lorex_computerplexoverride_storagestatus', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->boolean('option1');
            $table->boolean('option2');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('lorex_computerplexoverride_storagestatus');
    }
}
