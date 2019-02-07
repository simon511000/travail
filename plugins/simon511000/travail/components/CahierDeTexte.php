<?php
namespace Simon511000\Travail\Components;

use Simon511000\Travail\Models\CahierDeTexte as CahierDeTexteModel;
use Auth;

class CahierDeTexte extends \Cms\Classes\ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Cahier de Texte',
            'description' => 'Cahier de Texte de l\'utilisateur'
        ];
    }

    public function getUserCDT(){
      return CahierDeTexteModel::where('user_id', '=', Auth::getUser()->id)->get();
    }
}
