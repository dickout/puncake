<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Event\Event;

class ImagesController extends AppController
{
    public function index()
    {
        $this->Auth->allow([]);
        $this->viewBuilder()->setLayout('puncake');
        $this->set('images', $this->Images->find('all'));
    }

    public function add () {
        $this->Auth->allow([]);
        $image = $this->Images->newEntity();

        if ($this->request->is('post')) {
            $data = $this->request->getData();
            $file = $data['src'];
            $data['src'] = 'pun/cake/images/'.uniqid().'_'.$file['name'];

            if(move_uploaded_file($file['tmp_name'], ROOT . '/webroot/' . $data['src'])){
                $image = $this->Images->patchEntity($image, $data);
                if ($this->Images->save($image)) {
                    $this->Flash->success(__('The image has been created.'));
                    return $this->redirect([ 'controller' => 'Images', 'action' => 'index' ]);
                }
                $this->Flash->error(__('Unable to create the image.'));
            }
        }

        $this->viewBuilder()->setLayout('puncake');
    }

    public function edit ($id) {
        $this->Auth->allow([]);
        $image = $this->Images->get($id);

        if ($this->request->is('post')) {
            $data = $this->request->getData();
            $file = $data['src'];
            $data['src'] = 'pun/cake/images/'.uniqid().'_'.$file['name'];

            if(move_uploaded_file($file['tmp_name'], ROOT . '/webroot/' . $data['src'])){
                $image = $this->Images->patchEntity($image, $data);
                if ($this->Images->save($image)) {
                    $this->Flash->success(__('The image has been edited.'));
                    return $this->redirect([ 'controller' => 'Images', 'action' => 'index' ]);
                }
                $this->Flash->error(__('Unable to edit the image.'));
            }
        }

        $this->viewBuilder()->setLayout('puncake');
        $this->set('image', $image);
    }

    public function delete ($id) {
        $this->Auth->allow([]);
        $image = $this->Images->get($id);

        $this->Images->delete($image);

        return $this->redirect([ 'controller' => 'Images', 'action' => 'index' ]);
    }
}