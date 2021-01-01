<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Http\Session;
/**
 * Users Controller
 *
 * @property \App\Model\Table\ProductsTable $Products
 * @property \App\Model\Table\UsersTable $Users
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DashboardsController extends AppController
{
    public function initialize(): void
    {
        parent::initialize();

        $this->loadComponent('Paginator');
        $this->loadModel('Products'); 
        $this->loadModel('Users'); 
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->viewBuilder()->setLayout('home');  
    }

    public function product(){
        $iphones = $this->Products->find('all')
                                ->select()
                                ->where(['category' => 'iphone']);
        // $macbooks = $this->Products->find('all',['category' => 'macbook']);
        // $ipads = $this->Products->find('all',['category' => 'ipad']);
        // $watches = $this->Products->find('all',['category' => 'watch']);
        // $airpods = $this->Products->find('all',['category' => 'airpod']);
        $this->set(['iphones' => $iphones]);
        $this->viewBuilder()->setLayout('home');
    }
}
