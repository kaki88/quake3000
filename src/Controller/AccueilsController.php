<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;


class AccueilsController extends AppController
{
    public function index()
    {
        $dpt = TableRegistry::get('areas');
        $query = $dpt->find('list');
        $this->set(compact('query'));


        $ad = TableRegistry::get('ads');
        $ads = $ad->find()
            ->contain(['TypeAds', 'Towns', 'Images'])
            ->order(['Ads.id' => 'DESC'])->limit(4);
        $this->set(compact('ads'));


    }

}