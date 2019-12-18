<?php namespace Lorex\Computerplexoverride\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateLorexComputerplexoverrideStoragestatus extends Migration
{
    public function up()
    {
        Schema::table('lorex_computerplexoverride_storagestatus', function($table)
        {
            $table->integer('product_id');
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
        });
    }
    
    public function down()
    {
        Schema::table('lorex_computerplexoverride_storagestatus', function($table)
        {
            $table->dropColumn('product_id');
            $table->timestamp('created_at')->nullable()->default('NULL');
            $table->timestamp('updated_at')->nullable()->default('NULL');
        });
    }
}
