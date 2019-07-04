<?php
namespace App\Controller;

use App\Controller\AppController;

class ProjectsController extends AppController
{
    public function index()
    {
        $this->paginate = [
            'contain' => ['ProjectCategories']
        ];
        $projects = $this->paginate($this->Projects);

        $this->set(compact('projects'));
    }

    public function view($slug, $id = null)
    {
        $project = $this->Projects->get($id, [
            'contain' => ['ProjectCategories', 'ProjectImages']
        ]);

        $this->set('project', $project);
    }

}
