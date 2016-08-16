<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Utility\Inflector;


class PartenairesController extends AppController
{
    public function index($company = null)
    {
        $utilisateur = TableRegistry::get('users');
        if (!$company) {
            $query = $utilisateur->find()->where(['is_member' => 1, 'is_active' => 1]);
        } else {
            $modif = str_replace('-', ' ', $company);
            $query = $utilisateur->find()->where(['company_name' => $modif]);
        }

        $this->set('query', $query);
    }

    public function add()
    {

        $utilisateur = TableRegistry::get('type_users');
        $query = $utilisateur->find('list');
        $this->set(compact('query'));

        if (!empty($this->request->data)) {
            $NewUser = TableRegistry::get('Users');
            $CreatedUser = $NewUser->newEntity();

            $CreatedUser->email = $this->request->data['email'];
            $CreatedUser->username = $this->request->data['username'];
            $CreatedUser->password = $this->request->data['password'];
            $CreatedUser->is_active = $this->request->data['is_active'];
            $CreatedUser->is_member = $this->request->data['is_member'];
            $CreatedUser->is_admin = $this->request->data['is_admin'];
            $CreatedUser->first_name = $this->request->data['first_name'];
            $CreatedUser->last_name = $this->request->data['last_name'];
            $CreatedUser->company_name = $this->request->data['company_name'];
            $CreatedUser->type_user_id = $this->request->data['Status'];
            $CreatedUser->address = $this->request->data['address'];
            $CreatedUser->zipcode = $this->request->data['zipcode'];
            $CreatedUser->city = $this->request->data['city'];
            $CreatedUser->phone = $this->request->data['phone'];
            $CreatedUser->website_link = $this->request->data['website_link'];
            $CreatedUser->facebook_link = $this->request->data['facebook_link'];
            $CreatedUser->twitter_link = $this->request->data['twitter_link'];
            $CreatedUser->linkedin_link = $this->request->data['linkedin_link'];

            $NewUser->save($CreatedUser);
            return $this->redirect(
                ['controller' => 'Deposers', 'action' => 'index']);
        } else {
            echo 'veuillez remplir tout les champs';
        }
    }

    public function login()
    {
        $this->loadComponent('Auth', [
            'loginAction'=> [
                'controller'=>'Partenaires',
                'action' => 'add'],
            'authError'=> 'Impossible de se connecter comme ceci',
            'authenticate'=> [
                'Form'
                ],
            'storage'=> 'Session'
            ]);
        if ($this->request->is('post')) {
            $user= $this->Auth->identify();
            if ($user){
                $this->Auth->setUser($user);
                return $this->redirect(
                    ['controller' => 'Membres', 'actions'=>'profil']
                );
            }else{
                $this->Flash->error(__('pseudonyme ou mot de passe incorrect'), ['key' => 'auth']);
            }
        }

    }
}