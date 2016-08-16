<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Utility\Inflector;


class FichesController extends AppController
{
    public function index($id =null)

    {

        $offre = TableRegistry::get('ads');
        $img = TableRegistry::get('images');
        if (!$id) {
echo "rien a voir ici";
        }
        else {
            $offers = $offre->find()
                ->contain(['TypeAds','Towns','Users','Towns.Areas','Users.TypeUsers'])
                ->where(['ads.id' => $id])->first();
            if($offers->for_sale == 1){
                $type = "à vendre";}
            else {
                $type = "à louer";
            }
            if($offers->is_divisible == 1){
                $div = "oui";}
            else {
                $div = "non";
            }

            $imgs = $img->find()->where(['images.ad_id' => $id]);

            $this->set('offers',$offers);
            $this->set('type',$type);
            $this->set('div',$div);
            $this->set('imgs',$imgs);
        }


    }
    }

