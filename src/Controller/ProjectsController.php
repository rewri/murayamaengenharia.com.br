<?php
namespace App\Controller;

use App\Controller\AppController;

class ProjectsController extends AppController
{
    public function initialize()
    {
        parent::initialize();
        $this->loadModel('Testimonials');
        $this->loadModel('Projects');
    }

    public function index()
    {
        $this->set('title', 'Projetos');
        $testimonials = $this->Testimonials->getAll(3)->toArray();
        $this->set(compact('testimonials'));
        $projects = $this->Projects->getAll(15)->toArray();
        $this->set(compact('projects', 'testimonials'));
    }

    public function view($slug, $id = null)
    {
        $testimonials = $this->Testimonials->getAll(3)->toArray();
        $this->set(compact('testimonials'));
        $project = $this->Projects->get($id, [
            'contain' => ['ProjectCategories', 'ProjectImages']
        ]);
        $this->set('title', $project['title']);
        $this->set(compact('project', 'testimonials'));
    }

}
