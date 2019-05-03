<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Event\Event;

class OptionsController extends AppController
{
    public function index()
    {
        $this->Auth->allow([]);
        $this->viewBuilder()->setLayout('puncake');
        $this->set('options', $this->Options->find('all'));
    }

    public function add () {
        $this->Auth->allow([]);
        $option = $this->Options->newEntity();

        if ($this->request->is('post')) {
            $option = $this->Options->patchEntity($option, $this->request->getData());
            if ($this->Options->save($option)) {
                $this->Flash->success(__('The option has been created.'));
                return $this->redirect([ 'controller' => 'Options', 'action' => 'index' ]);
            }
            $this->Flash->error(__('Unable to create the option.'));
        }

        $this->viewBuilder()->setLayout('puncake_ckeditor');
    }

    public function edit ($id) {
        $this->Auth->allow([]);
        $option = $this->Options->get($id);

        if ($this->request->is('post')) {
            $option = $this->Options->patchEntity($option, $this->request->getData());
            if ($this->Options->save($option)) {
                $this->Flash->success(__('The option has been edited.'));
                return $this->redirect([ 'controller' => 'Options', 'action' => 'index' ]);
            }
            $this->Flash->error(__('Unable to edit the option.'));
        }

        $this->viewBuilder()->setLayout('puncake_ckeditor');
        $this->set('option', $option);
    }

    public function delete ($id) {
        $this->Auth->allow([]);
        $option = $this->Options->get($id);

        $this->Options->delete($option);

        return $this->redirect([ 'controller' => 'Options', 'action' => 'index' ]);
    }
}