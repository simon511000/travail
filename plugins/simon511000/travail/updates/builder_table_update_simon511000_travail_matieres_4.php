<?php namespace Simon511000\Travail\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSimon511000TravailMatieres4 extends Migration
{
    public function up()
    {
        Schema::table('simon511000_travail_matieres', function($table)
        {
            $table->string('matiere_color')->default('#03a9f4')->change();
        });
    }
    
    public function down()
    {
        Schema::table('simon511000_travail_matieres', function($table)
        {
            $table->string('matiere_color')->default(null)->change();
        });
    }
}
