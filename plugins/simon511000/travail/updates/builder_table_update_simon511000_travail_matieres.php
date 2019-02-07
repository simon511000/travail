<?php namespace Simon511000\Travail\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSimon511000TravailMatieres extends Migration
{
    public function up()
    {
        Schema::table('simon511000_travail_matieres', function($table)
        {
            $table->renameColumn('matiere_title', 'matiere_name');
        });
    }
    
    public function down()
    {
        Schema::table('simon511000_travail_matieres', function($table)
        {
            $table->renameColumn('matiere_name', 'matiere_title');
        });
    }
}
