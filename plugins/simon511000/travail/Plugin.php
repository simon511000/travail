<?php namespace Simon511000\Travail;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
      return [
        'Simon511000\Travail\Components\CahierDeTexte' => 'cahierDeTexte'
      ];
    }

    public function registerListColumnTypes()
    {
      return [
        'priorite' => function($value){
          switch($value){
            case 1:
              return 'Faible';
              break;
            case 2:
              return 'Moyenne';
              break;
            case 3:
              return 'Importante';
              break;
          }
        },
        'type' => function($value){
          switch($value){
            case 1:
              return 'Exercice';
              break;
            case 2:
              return 'Interro';
              break;
            case 3:
              return 'DM';
              break;
          }
        }
      ];
    }
}
