<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

class PuncakeController extends AppController
{
    public function beforeFilter(Event $event)
    {
        $this->Auth->allow([]);
        $this->viewBuilder()->setLayout('puncake');
    }

    public function index()
    {
    }
}
