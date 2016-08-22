<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Mailer\Email;
use Cake\ORM\TableRegistry;
use Cake\Utility\Inflector;


class FichesController extends AppController
{
    public function initialize()
    {
        parent::initialize();
        $this->Auth->allow(['index','submit']);
    }
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
        if ($this->request->is('post')){
        $ids = $id;
        $NewMessage = TableRegistry::get('messages');
        $CreatedMessage = $NewMessage->newEntity();
        $mes= $CreatedMessage->message = $this->request->data['message'];
              $mail=$CreatedMessage->email = $this->request->data['email'];
        $CreatedMessage->name = $this->request->data['name'];
        $CreatedMessage->ad_id = $ids;
            $NewMessage->save($CreatedMessage);
            $to  = $mail;
            // Sujet
            $subject = 'votre message';

            // message
            $message = $mes;

            // Envoi
            mail($to, $subject, $message);
            $this->redirect('fiches/'.$ids);
    }

    }

    }

