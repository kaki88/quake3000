<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Utility\Inflector;


class MembresController extends AppController
{
    public function profil($id = null)
    {
        $tuser= TableRegistry::get('users');
        $user= $this->Auth->user('id');
        $users = $tuser->find()
            ->where(['users.id' => $user])->first();
        $this->set('users',$users);
    }

    public function isAuthorized($user)
    {
        if (!is_null($this->Auth->User('id')) && ($this->Auth->User('is_admin') || $this->Auth->User('is_member'))) {
            return true;
        } else{
            
        }
    }
}



