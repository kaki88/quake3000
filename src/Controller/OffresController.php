<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Utility\Inflector;


class OffresController extends AppController{
	public function index(){


//THIBAUT SCRIPT NON FAIT: A MODIFIER
        $images = TableRegistry::get('images');
        $offres = TableRegistry::get('ads');
        $queryImg = $images->find('list');
        $queryOffer = $offres->find('list');
        $this->set(compact('queryImg'));
        $this->set(compact('queryOffer'));



      
}
}



?>