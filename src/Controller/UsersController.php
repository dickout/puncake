<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

class UsersController extends AppController
{

    public function beforeFilter(Event $event)
    {
        $this->Auth->allow(['register', 'logout']);
    }

    public function index()
    {
        $this->viewBuilder()->setLayout('puncake');
        $this->set('users', $this->Users->find('all'));
    }

    public function view($id)
    {
        $user = $this->Users->get($id);
        $this->set(compact('user'));
    }

    public function register()
    {
        $this->viewBuilder()->setLayout('puncake_clear');
        $user = $this->Users->newEntity();
        $data = $this->request->getData();
        $data['role'] = 'user';

        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $data);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error(__('Unable to register the user.'));
        }
        $this->set('user', $user);
    }

    public function login()
    {
        $this->viewBuilder()->setLayout('puncake_clear');
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                if($user['role'] == 'admin')
                    return $this->redirect(['controller' => 'Puncake', 'action' => 'index']);
                else return $this->redirect(['controller' => 'Pages', 'action' => 'display', 'home']);
            }
            $this->Flash->error(__('Invalid username or password, try again'));
        }
    }

    public function logout()
    {
        return $this->redirect($this->Auth->logout());
    }

}