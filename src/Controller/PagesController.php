<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Event\Event;

class PagesController extends AppController
{
    public function index()
    {
        $this->Auth->allow([]);
        $this->viewBuilder()->setLayout('puncake');
        $this->set('pages', $this->Pages->find('all'));
    }

    public function add () {
        $this->Auth->allow([]);
        $page = $this->Pages->newEntity();

        if ($this->request->is('post')) {
            $page = $this->Pages->patchEntity($page, $this->request->getData());
            if ($this->Pages->save($page)) {
                $this->Flash->success(__('The page has been created.'));
                return $this->redirect([ 'controller' => 'Pages', 'action' => 'index' ]);
            }
            $this->Flash->error(__('Unable to create the page.'));
        }

        $this->viewBuilder()->setLayout('puncake_ckeditor');

        $templates = TableRegistry::get('Templates');
        $this->set('templates', $templates->find('all'));
    }

    public function edit ($id) {
        $this->Auth->allow([]);
        $page = $this->Pages->get($id);

        if ($this->request->is('post')) {
            $page = $this->Pages->patchEntity($page, $this->request->getData());
            if ($this->Pages->save($page)) {
                $this->Flash->success(__('The page has been edited.'));
                return $this->redirect([ 'controller' => 'Pages', 'action' => 'index' ]);
            }
            $this->Flash->error(__('Unable to edit the page.'));
        }

        $this->viewBuilder()->setLayout('puncake_ckeditor');

        $templates = TableRegistry::get('Templates');
        $this->set('templates', $templates->find('all'));
        $this->set('page', $page);
    }

    public function delete ($id) {
        $this->Auth->allow([]);
        $page = $this->Pages->get($id);

        $this->Pages->delete($page);

        return $this->redirect([ 'controller' => 'Pages', 'action' => 'index' ]);
    }

    public function view ($slug) {
        $pages = $this->Pages->find('all')
            ->where(['Pages.slug =' => $slug])->limit(1);
        $optionsData = TableRegistry::get('Options')->find('all')
            ->where(['Options.extra =' => $slug])->limit(1);
        $options = [];
        $images = TableRegistry::get('Images');
        

        foreach($optionsData as $option)
            if($options['type'] == 'page')
                $options[$option['name']] = $option['value'];

        $this->set('images', $images->find('all'));
        $this->set('options', $options);
        
        foreach ($pages as $page) {
            $templates = TableRegistry::get('Templates');
            $template = $templates->get($page['template_id']);
            $this->set('title', $page['title']);
            $this->set('content', str_replace('{content}', $page['body'], $template['body']));
        }
    }
}

/*
namespace App\Controller;

use App\Controller\AppController;
use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Cake\Event\Event;

class PagesController extends AppController
{
    public function display(...$path)
    {
        $count = count($path);
        if (!$count) {
            return $this->redirect('/');
        }
        if (in_array('..', $path, true) || in_array('.', $path, true)) {
            throw new ForbiddenException();
        }
        $page = $subpage = null;

        if (!empty($path[0])) {
            $page = $path[0];
        }
        if (!empty($path[1])) {
            $subpage = $path[1];
        }
        $this->set(compact('page', 'subpage'));

        try {
            $this->render(implode('/', $path));
        } catch (MissingTemplateException $exception) {
            if (Configure::read('debug')) {
                throw $exception;
            }
            throw new NotFoundException();
        }
    }
}
*/