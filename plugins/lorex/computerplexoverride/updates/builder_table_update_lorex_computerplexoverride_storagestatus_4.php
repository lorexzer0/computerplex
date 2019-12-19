<?php namespace Lorex\Computerplexoverride\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateLorexComputerplexoverrideStoragestatus4 extends Migration
{
    public function up()
    {
        Schema::table('lorex_computerplexoverride_storagestatus', function($table)
        {
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('lorex_computerplexoverride_storagestatus', function($table)
        {
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
        });
    }
}
