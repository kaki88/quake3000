<?php

namespace App\Controller;

use App\Controller\AppController;


class InfosController extends AppController
{
    public function initialize()
    {
        parent::initialize();
        $this->Auth->allow(['view','cgv','mention']);
    }

    public function view()

    {

    }
    public function cgv()
        {

        }

       public function mention()
           {

           }
}