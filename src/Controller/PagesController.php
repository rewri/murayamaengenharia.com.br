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
    }

    public function index()
    {
        $this->viewBuilder()->setLayout('home');
        $testimonials = $this->Testimonials->getAll(3)->toArray();
        $projectsLimit = $this->request->is('mobile') ? 3 : 6;
        $projects = $this->Projects->getAll($projectsLimit)->toArray();
        $contributors = $this->Contributors->getAll()->toArray();
        $this->set(compact('testimonials','projects', 'contributors'));
    }

    public function about()
    {

    }

    public function contact()
    {

    }

}
