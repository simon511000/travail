<?php namespace Simon511000\Travail\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSimon511000TravailMatieres extends Migration
{
    public function up()
    {
        Schema::create('simon511000_travail_matieres', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('matiere_title');
            $table->string('slug');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('simon511000_travail_matieres');
    }
}
