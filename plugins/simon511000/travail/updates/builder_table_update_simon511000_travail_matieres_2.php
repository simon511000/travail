<?php namespace Simon511000\Travail\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSimon511000TravailMatieres2 extends Migration
{
    public function up()
    {
        Schema::table('simon511000_travail_matieres', function($table)
        {
            $table->dropColumn('slug');
        });
    }
    
    public function down()
    {
        Schema::table('simon511000_travail_matieres', function($table)
        {
            $table->string('slug', 255);
        });
    }
}
