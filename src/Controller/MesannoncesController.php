<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

class MesannoncesController extends AppController
{
    public function initialize()
    {
        parent::initialize();
        $this->Auth->allow(['index']);
    }
    public function index()
    {
        $ad = TableRegistry::get('ads');
        $id = $this->Auth->user('id');
        $ads = $ad->find()
            ->where(['user_id' => $id])
            ->contain(['TypeAds', 'Towns', 'Images']);
        ;
        $this->set(compact('ads'));
    }

}