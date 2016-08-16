<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

class EspacesController extends AppController
{
    public function deposer()

    {
        $ads = TableRegistry::get('type_ads');
        $type_ads = $ads->find('list');
        $this->set(compact('type_ads'));
        $cities = TableRegistry::get('towns');
        $city = $cities->find('list')->limit(50);
        $this->set(compact('city'));
    }



    public function enregistrer()
    {
        $NewUser = TableRegistry::get('Ads');
        $CreatedUser = $NewUser->newEntity();

        $CreatedUser->user_id = $this->request->data['userid'];
        $CreatedUser->type_ad_id = $this->request->data['type_ad_id'];
        $CreatedUser->for_sale = $this->request->data['for_sale'];
        $CreatedUser->for_rent = $this->request->data['for_rent'];
        $CreatedUser->price = $this->request->data['price'];
        $CreatedUser->price_info = $this->request->data['price_info'];
        $CreatedUser->surface = $this->request->data['surface'];
        $CreatedUser->is_divisible = $this->request->data['is_divisible'];
        $CreatedUser->town_id = $this->request->data['town_id'];
        $CreatedUser->description = $this->request->data['description'];
        $CreatedUser->latitude = $this->request->data['latitude'];
        $CreatedUser->longitude = $this->request->data['longitude'];

        $NewUser->save($CreatedUser);




        $this->set('title', 'Déposer une offre');
        $this->set('pageDescription', 'Les partenaires de la bourse immo entreprise');
        $this->set('pageKeywords', 'immobilier,entreprise,batiment,industrie,industriel,usine');


    }
}