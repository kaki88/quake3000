<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Utility\Inflector;


class ContactsController extends AppController{
	public function initialize()
	{
		parent::initialize();
		$this->Auth->allow(['index']);
	}

	public function index(){


}

}


?>