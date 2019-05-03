<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Event\Event;

class TemplatesController extends AppController
{
    public function index()
    {
        $this->Auth->allow([]);
        $this->viewBuilder()->setLayout('puncake');
        $this->set('templates', $this->Templates->find('all'));
    }

    public function add () {
        $this->Auth->allow([]);
        $template = $this->Templates->newEntity();

        if ($this->request->is('post')) {
            $template = $this->Templates->patchEntity($template, $this->request->getData());
            if ($this->Templates->save($template)) {
                $this->Flash->success(__('The template has been created.'));
                return $this->redirect([ 'controller' => 'Templates', 'action' => 'index' ]);
            }
            $this->Flash->error(__('Unable to create the template.'));
        }

        $this->viewBuilder()->setLayout('puncake_ckeditor');
    }

    public function edit ($id) {
        $this->Auth->allow([]);
        $template = $this->Templates->get($id);

        if ($this->request->is('post')) {
            $template = $this->Templates->patchEntity($template, $this->request->getData());
            if ($this->Templates->save($template)) {
                $this->Flash->success(__('The template has been edited.'));
                return $this->redirect([ 'controller' => 'Templates', 'action' => 'index' ]);
            }
            $this->Flash->error(__('Unable to edit the template.'));
        }

        $this->viewBuilder()->setLayout('puncake_ckeditor');
        $this->set('template', $template);
    }

    public function delete ($id) {
        $this->Auth->allow([]);
        $template = $this->Templates->get($id);

        $this->Templates->delete($template);

        return $this->redirect([ 'controller' => 'Templates', 'action' => 'index' ]);
    }
}