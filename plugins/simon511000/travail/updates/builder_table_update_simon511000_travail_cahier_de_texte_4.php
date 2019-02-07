<?php namespace Simon511000\Travail\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSimon511000TravailCahierDeTexte4 extends Migration
{
    public function up()
    {
        Schema::table('simon511000_travail_cahier_de_texte', function($table)
        {
            $table->integer('type')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('simon511000_travail_cahier_de_texte', function($table)
        {
            $table->dropColumn('type');
        });
    }
}
