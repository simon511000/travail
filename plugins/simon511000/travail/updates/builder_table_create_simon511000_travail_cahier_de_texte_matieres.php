<?php namespace Simon511000\Travail\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSimon511000TravailCahierDeTexteMatieres extends Migration
{
    public function up()
    {
        Schema::create('simon511000_travail_cahier_de_texte_matieres', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('cahier_de_texte_id');
            $table->integer('matiere_id');
            $table->primary(['cahier_de_texte_id','matiere_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('simon511000_travail_cahier_de_texte_matieres');
    }
}