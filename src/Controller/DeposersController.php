<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;


class DeposersController extends AppController
{
    public function index()
    {
        $ad = TableRegistry::get('type_ads');
        $ads = $ad->find('list');
        $this->set(compact('ads'));
    }

    public function submit()
    {
        $img = TableRegistry::get('images');
        $insert_to_img = $img->newEntity();
        $last = $img->find()->select(['id'])->order(['id' => 'DESC'])->first();
        $lastid = $last['id'] + 1;
        $NewUser = TableRegistry::get('Ads');
        $CreatedUser = $NewUser->newEntity();
        $cities = TableRegistry::get('Towns');
        $cit =  $this->request->data['city'];
        $city = $cities->find()->select(['id'])->where(['town_name' => $cit])->first();
        $id_city =$city['id'];
        $last_ad_id = $NewUser->find()->select(['id'])->order(['id' => 'DESC'])->first();
        $lastad = $last_ad_id['id'] + 1;

        if ($this->request->data['newsImage']) {
            if (count($this->request->data['newsImage']) > 0) {
                for ($j = 0; $j < count($this->request->data['newsImage']); $j++) {
                    $id = $j + $lastid;
                    $path = $_FILES['newsImage']['name']["$j"];
                    $ext = pathinfo($path, PATHINFO_EXTENSION);
                    $filen = $lastad . '&' . $id . '.png';
                    $path = WWW_ROOT . 'files' . DS . $filen;
                    if (move_uploaded_file($_FILES["newsImage"]['tmp_name']["$j"], $path)) {
                        echo "ok";
                    }
                }
            }
        }


        $user = 1;

        if ($this->request->data['select'] == 1) {
            $sale = 1;
            $rent = 0;
        }
        if ($this->request->data['select'] == 2) {
            $sale = 0;
            $rent = 1;
        }
        if ($this->request->data['select'] == 3) {
            $sale = 1;
            $rent = 1;
        }

        $CreatedUser->town_id = $id_city;
        $CreatedUser->for_rent = $rent;
        $CreatedUser->for_sale = $sale;
        $CreatedUser->user_id = $user;
        $CreatedUser->type_ad_id = $this->request->data['type_ad_id'];
        $CreatedUser->price = $this->request->data['price'];
        $CreatedUser->price_info = $this->request->data['price_info'];
        $CreatedUser->surface = $this->request->data['surface'];
        $CreatedUser->description = $this->request->data['description'];
        $CreatedUser->is_divisible = $this->request->data['is_divisible'];
        $CreatedUser->latitude = $this->request->data['latitude'];
        $CreatedUser->longitude = $this->request->data['longitude'];
        $CreatedUser->is_active = 1;
        $NewUser->save($CreatedUser);

        for ($x = 0; $x < count($this->request->data['newsImage']); $x++) {
            $insert_to_img = $img->newEntity();
            $insert_to_img->ad_id = $lastad;
            $insert_to_img->is_presentation = 0;
            $insert_to_img->description = '';
            $img->save($insert_to_img);
        }

        $this->redirect('/fiches/' . $lastad . '');




    }
}


