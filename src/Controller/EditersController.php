<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Utility\Inflector;


class EditersController extends AppController
{
    public function index($id = null)
    {
        $ad= $this->Ads->get($id, [
            'contain'=> []
        ]);
        if ($this->request->is(array('patch','post', 'put'))) {
            $ad= $this->Ads->patchEntity($ad,$this->request->data);
            if ($this->Ads->save($ad)) {
                $this->Flash->success(__('l\'offre a bien été modifiée'));
                return $this->redirect(array('/offre/'.$id));
            }
            $this->Flash->error(__('problème de téléchargement des modif'));
        }else {
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

   /* public function edit($id)
    {
        if (!$id) {
            $this->Flash->error(__('Pas d\'annonce'));
        }

        $post = $this->Post->findById($id);
        if (!$post) {
            $this->Flash->error(__('Pas de post'));
        }

        if ($this->request->is(array('post', 'put'))) {
            $this->Post->id = $id;
            if ($this->Post->save($this->request->data)) {
                $this->Flash->success(__('Your post has been updated.'));
                return $this->redirect(array('/offre/'.$id));
            }
            $this->Flash->error(__('Unable to update your post.'));
        }

        if (!$this->request->data) {
            $this->request->data = $post;
        }
    }*/
}




