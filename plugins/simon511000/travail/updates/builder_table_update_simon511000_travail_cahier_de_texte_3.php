<?php namespace Simon511000\Travail\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSimon511000TravailCahierDeTexte3 extends Migration
{
    public function up()
    {
        Schema::table('simon511000_travail_cahier_de_texte', function($table)
        {
            $table->boolean('fait')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('simon511000_travail_cahier_de_texte', function($table)
        {
            $table->dropColumn('fait');
        });
    }
}
