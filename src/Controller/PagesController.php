<?php

namespace App\Controller;

use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;

class PagesController extends AppController
{
    public function initialize()
    {
        parent::initialize();
        $this->loadModel('Testimonials');
        $this->loadModel('Projects');
        $this->loadModel('Contributors');

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
        $testimonials = $this->Testimonials->getAll(3)->toArray();
        $projectsLimit = $this->request->is('mobile') ? 3 : 6;
        $projects = $this->Projects->getAll($projectsLimit)->toArray();
        $contributors = $this->Contributors->getAll()->toArray();
        $this->set(compact('projects', 'contributors'));
    }

    public function contact()
    {

    }

    public function contributors()
    {
        $contributors = $this->Contributors->getAll()->toArray();
        $this->set(compact('contributors'));
    }

}
