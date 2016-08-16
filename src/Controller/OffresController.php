<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Utility\Inflector;


class OffresController extends AppController{
	public function index(){


//THIBAUT SCRIPT NON FAIT: A MODIFIER
        $ad = TableRegistry::get('ads');
        $ads = $ad->find()
            ->contain(['TypeAds', 'Towns', 'Images'])
            ->order(['ads.id' => 'DESC']);
        $this->set(compact('ads'));
    }


    function resultSearch(){
        $d = TableRegistry::get('ads');
        $city = $this->request->data['Post']['city'];
        $d['posts'] = $this->Ads->find('all', array(
            'conditions' => array(
                'is_active'=>'1','for_sale'=>'1',
                "OR"=>array('Ads.id LIKE'=>'%'.$city.'%','Ads.user_id LIKE'=>'%'.$city.'%'))));
        $this->set($d);
        $this->render('index');
    }

}


