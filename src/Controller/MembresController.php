<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Utility\Inflector;


class MembresController extends AppController
{
    public function profil()
    {
    }

    public function isAuthorized($user)
    {
        if (!is_null($this->Auth->User('id')) && $this->Auth->User('is_admin')) {
            return true;
        }
    }
}




