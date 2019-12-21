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
        $this->loadModel('ProjectCategories');

        $testimonials = $this->Testimonials->getAll(3)->toArray();
        $this->set(compact('testimonials'));
    }

    public function index()
    {
        $this->set('title', 'Projetos');
        $projectCategories = $this->ProjectCategories->find('all')->order('rand()')->toArray();
        $projects = $this->Projects->getAll(90)->toArray();
        $this->set(compact('projects', 'projectCategories'));
    }

    public function listByCategory($slug, $id = null)
    {
        $category = $this->ProjectCategories->get($id);
        $this->set('title', $category['title']);
        $projects = $this->Projects->getAllByCategory($category['id']);
        $this->set(compact('category', 'projects'));
    }

    public function view($slug, $id = null)
    {
        $project = $this->Projects->get($id, [
            'contain' => ['ProjectCategories', 'ProjectImages']
        ]);
        $this->set('title', $project['title']);
        $otherProjects = $this->Projects->getAll(4)->toArray();
        $this->set(compact('project', 'otherProjects'));
    }

}
