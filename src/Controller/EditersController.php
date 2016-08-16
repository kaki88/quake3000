<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Utility\Inflector;


class EditersController extends AppController
{
    public function index($id = null)
    {
        $ad = TableRegistry::get('type_ads');
        $ads = $ad->find('list');
        $this->set(compact('ads'));
        $offre = TableRegistry::get('ads');
        $img = TableRegistry::get('images');

        if (!$id) {
            echo "rien a voir ici";
        } else {
            $offers = $offre->find()
                ->contain(['TypeAds', 'Towns', 'Users', 'Towns.Areas', 'Users.TypeUsers'])
                ->where(['ads.id' => $id])->first();
            if ($offers->for_sale == 1) {
                $type = "à vendre";
            } else {
                $type = "à louer";
            }
            if ($offers->is_divisible == 1) {
                $div = "oui";
            } else {
                $div = "non";
            }
            $imgs = $img->find()->where(['images.ad_id' => $id]);
            $this->set('offers', $offers);
            $this->set('type', $type);
            $this->set('div', $div);
            $this->set('imgs', $imgs);
        }
    }

    public function edit($id)
    {
//        $img = TableRegistry::get('images');
//        $insert_to_img = $img->newEntity();
//        $last = $img->find()->select(['id'])->order(['id' => 'DESC'])->first();
//        $lastid = $last['id'] + 1;
        $cities = TableRegistry::get('Towns');
        $cit =  $this->request->data['city'];
        $city = $cities->find()->select(['id'])->where(['town_name' => $cit])->first();
        $id_city =$city['id'];
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

        $ad = TableRegistry::get('Ads');
        $CreatedUser = $ad->updateAll(
            $CreatedUser->id = $id,
            $CreatedUser->town_id = $id_city,
        $CreatedUser->for_rent = $rent,
        $CreatedUser->for_sale = $sale,
        $CreatedUser->user_id = $user,
        $CreatedUser->type_ad_id = $this->request->data['type_ad_id'],
        $CreatedUser->price = $this->request->data['price'],
        $CreatedUser->price_info = $this->request->data['price_info'],
        $CreatedUser->surface = $this->request->data['surface'],
        $CreatedUser->description = $this->request->data['description'],
        $CreatedUser->is_divisible = $this->request->data['is_divisible'],
        $CreatedUser->latitude = $this->request->data['latitude'],
        $CreatedUser->longitude = $this->request->data['longitude'],
        $CreatedUser->is_active = 1);
        $ad->save($CreatedUser);


    }
}




