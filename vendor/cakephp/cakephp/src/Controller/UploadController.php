<?php

namespace App\Controller;

use Cake\Controller\Controller;
use Cake\ORM\TableRegistry;
use Cake\Event\EventInterface;
use Cake\Utility\Inflector;
use Cake\Datasource\ConnectionManager;
use Cake\Datasource\FactoryLocator;
use Cake\Utility\Hash;

class UploadController extends AppController
{
    public function initialize(): void
    {
        parent::initialize();
        $this->loadComponent('RequestHandler');
    }

    public function document()
    {
        $upload_results = func_get_args();
        $this->set(compact('upload_results'));

        // Specify which view vars JsonView should serialize.
        $this->viewBuilder()->setOption('serialize', ['upload_results']);
    }
}
