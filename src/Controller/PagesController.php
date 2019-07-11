<?php

namespace App\Controller;

use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Cake\ORM\TableRegistry;
use Cake\Mailer\Email;
use Cake\Mailer\TransportFactory;

class PagesController extends AppController
{
    public function initialize()
    {
        parent::initialize();
        $this->loadModel('Testimonials');
        $this->loadModel('Projects');
        $this->loadModel('Contributors');
        $this->loadModel('Budgets');

        $testimonials = $this->Testimonials->getAll(3)->toArray();
        $this->set(compact('testimonials'));
    }

    public function index()
    {
        $this->viewBuilder()->setLayout('home');
        $projectsLimit = $this->request->is('mobile') ? 3 : 6;
        $projects = $this->Projects->getAll($projectsLimit)->toArray();
        $contributors = $this->Contributors->getAll()->toArray();
        $this->set(compact('projects', 'contributors'));
    }

    public function about()
    {
        $this->set('title', 'Quem somos');
        $projectsLimit = $this->request->is('mobile') ? 3 : 6;
        $projects = $this->Projects->getAll($projectsLimit)->toArray();
        $contributors = $this->Contributors->getAll()->toArray();
        $this->set(compact('projects', 'contributors'));
    }

    public function contact()
    {
        $this->set('title', 'Contato');
    }

    public function contributors()
    {
        $this->set('title', 'Equipe');
        $contributors = $this->Contributors->getAll()->toArray();
        $this->set(compact('contributors'));
    }

    public function services()
    {
        $this->set('title', 'Serviços');
    }

    public function budget()
    {
        $this->autoRender = false;
        if ($this->request->is('post')) {
            $data = $this->request->getData();
            if (!empty($data)) {
                $data['created'] = date('Y-m-d H:i:s');
                $budgets = TableRegistry::getTableLocator()->get('Budgets');
                $budget = $budgets->newEntity($data);
                if ($budgets->save($budget)) {
                    $created = date('d/m/y - H:i:s');
                    $description = "
                        <h1>Contato para solicitação de orçamento:</h1>
                        <p><strong>Nome:</strong> {$data['name']}</p>
                        <p><strong>Fone:</strong> {$data['phone']}</p>
                        <p><strong>Descrição:</strong> {$data['description']}</p>
                        <p><strong>Data:</strong> {$created}</p>
                    ";
                    $email = new Email('default');
                    $email->setFrom(['contato@murayamaengenharia.com.br' => 'Contato Murayama Engenharia'])
                        ->setTo('contato@murayamaengenharia.com.br')
                        ->setBcc('rkfumes@gmail.com')
                        ->setSubject('Solicitação de orçamento')
                        ->setEmailFormat('html')
                        ->send($description);
                }
            }
        }
    }

}
