<?php
namespace App\Controller;
use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Utility\Inflector;

class OffresController extends AppController{
    public function index(){
        $ad = TableRegistry::get('ads');
        $ads = $ad->find()
            ->contain(['TypeAds', 'Towns', 'Images'])
            ->order(['ads.id' => 'DESC']);
        $number = $ads->count();
        $this->set(compact('ads'));
        $this->set(compact('number'));
    }
    function results(){
        $adada = TableRegistry::get('ads');
        $city =$this->request->query['city'];
        $zipcode =$this->request->query['zipcode'];
        $typebien =$this->request->query['typebien'];
        $typeoffre =$this->request->query['typeoffre'];
        if ($this->request->query['typeoffre'] == 0) {
            $sale = 1;
            $rent = 1;
        }
        if ($this->request->query['typeoffre'] == 1) {
            $sale = 1;
            $rent = 0;
        }
        if ($this->request->query['typeoffre'] == 2) {
            $sale = 0;
            $rent = 1;
        }
        if ($this->request->query['typeoffre'] == 3) {
            $sale = 1;
            $rent = 1;
        }
        $min = explode( ';', $this->request->query['surface'] );
        $ads = $adada->find('all', array(
            'conditions' => array(
                'is_active'=>'1',
                "AND"=>array('town_name LIKE'=>'%'.$city.'%'),
                "AND"=>array('town_zip_code LIKE'=>'%'.$zipcode.'%'),
                "AND"=>array('type_ad_id' => $typebien),
                "AND"=>array('for_sale' => $sale),
                "AND"=>array('for_rent' => $rent),
                "AND"=>array('surface between '.$min[0].' and '.$min[1].'')
            )))
            ->contain(['TypeAds', 'Towns', 'Images']);
        $number = $ads->count();
        $this->set(compact('ads'));
        $this->set(compact('number'));
        $this->set(compact('city'));
        $this->set(compact('zipcode'));
        $this->set(compact('typebien'));
        $this->set(compact('typeoffre'));
        $this->set(compact('min'));
    }
    public function edit($id = null)
    {
       /* $ad = $this->Ads->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(array('patch', 'post', 'put'))) {
            $ad = $this->Ads->patchEntity($ad, $this->request->data);
            if ($this->Ads->save($ad)) {
                $this->Flash->success(__('l\'offre a bien été modifiée'));
                return $this->redirect(array('/offre/' . $id));
            }
            $this->Flash->error(__('problème de téléchargement des modif'));
        } else {
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
                $imgs = $img->find()->where(['images.ad_id' => $id]);
                $this->set('offers', $offers);
                $this->set('imgs', $imgs);
            }*/
      //  }
    }
}


