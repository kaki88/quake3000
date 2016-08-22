<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Utility\Inflector;


class OffresController extends AppController{


    public $paginate =[
        'limit' => 10
    ];

    public function initialize()
    {

    }
    public function isAuthorized($user)
    {
        if (!is_null($this->Auth->User('id')) && ($this->Auth->User('is_admin') || $this->Auth->User('is_member'))) {
            return true;
        } else{
            parent::initialize();
            $this->loadComponent('Paginator');
            $this->Auth->allow(['index','results']);
        }
    }
	public function index(){
        $ad = TableRegistry::get('ads');
        if (isset($this->request->query['sort'])){
            $sort = $this->request->query['sort'];
            $column = 'ads.created';
            $sorting = $sort;
        }
         if  (isset($this->request->query['surface'])){
            $surface= $this->request->query['surface'];
            $column = 'ads.surface';
            $sorting = $surface;
        }
        if (isset($this->request->query['prix'])){
            $prix = $this->request->query['prix'];
            $column = 'ads.price';
            $sorting = $prix;
        }
        if(empty($_GET)){
            $column = 'ads.created';
            $sorting = 'desc';
        }
        $ads = $ad->find()
            ->contain(['TypeAds', 'Towns', 'Images'])
            ->order([$column => $sorting]);
        $this->set(array('data'=>$ads));
        $this->set('ads', $this->paginate($ads));
        $number = $ads->count();
        $this->set(compact('ads'));
        $this->set(compact('number'));
        $this->set(compact('sort'));
        $this->set(compact('surface'));
        $this->set(compact('prix'));
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
            $sale = 0;
            $rent = 1;
        }
        if ($this->request->query['typeoffre'] == 2) {
            $sale = 1;
            $rent = 0;
        }
        if ($this->request->query['typeoffre'] == 3) {
            $sale = 1;
            $rent = 1;
        }
        $min = explode( ';', $this->request->query['surface'] );

        $array = [];
        if (!empty($this->request->query['city'])) {
            $push = $this->request->query['city'];
            $pushall =  "town_name LIKE '%$push%'";
            array_push($array, $pushall);
        }
        if (!empty($this->request->query['zipcode'])) {
            $push = $this->request->query['zipcode'];
            $pushall =  "town_zip_code LIKE '%$push%'";
            array_push($array, $pushall);
        }
        if (!empty($this->request->query['typebien'])) {
            $push = $this->request->query['typebien'];
            $pushall =  "type_ad_id = '$push'";
            array_push($array, $pushall);
        }
        if (!empty($this->request->query['typeoffre'])) {
            $push = $this->request->query['typeoffre'];
            $pushall =  "for_sale = '$sale' AND for_rent = '$rent' ";
            array_push($array, $pushall);
        }
        $ads = $adada->find()
            ->where(['is_active' => 1])
            ->andWhere([
                'surface > '.$min[0].' AND surface < '.$min[1].'',
                $array
            ])
            ->contain(['TypeAds', 'Towns', 'Images']);




        $this->set(array('data'=>$ads));
        $this->set('ads', $this->paginate($ads));
        $number = $ads->count();
        $this->set(compact('ads'));
        $this->set(compact('number'));
        $this->set(compact('city'));
        $this->set(compact('zipcode'));
        $this->set(compact('typebien'));
        $this->set(compact('typeoffre'));
        $this->set(compact('min'));
        $this->set(compact('array'));
    }
    public function edit($id = null)
    {
        $ad = $this->Ads->get($id, [
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
            }
        }
    }



    public function supprimer($id)
    {
        $ad = TableRegistry::get('ads');
        $entity = $ad->get($id);
        $result = $ad->delete($entity);
        $this->redirect('/mes-annonces');
    }

}


