<?php namespace Simon511000\Travail\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSimon511000TravailCahierDeTexte extends Migration
{
    public function up()
    {
        Schema::create('simon511000_travail_cahier_de_texte', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->text('description')->nullable();
            $table->integer('matiere_id')->nullable();
            $table->date('when')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('simon511000_travail_cahier_de_texte');
    }
}
