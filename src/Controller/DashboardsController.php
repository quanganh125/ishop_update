<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Http\Session;
use Cake\Event\EventInterface;
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
        // parent::initialize();
        $this->loadComponent('Paginator');
        $this->loadComponent('Flash');
        $this->loadModel('Products'); 
        $this->loadModel('Users'); 
        $this->viewBuilder()->setLayout('home'); 
    }

    public function isUserSignIn(){
        $user = $this->getRequest()->getSession()->check('User.id');

        if(!$user){
            $this->redirect(['controller' => 'users',
                            'action' => 'sign_in']);
        }
    }

    public function beforeFilter(EventInterface $event)
    {
        $this->isUserSignIn(); 
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $id = $this->request->getSession()->read('User.id'); 
        $user = $this->Users->findById($id);
        $this->set(['user' => $user]);
    }

    public function product(){
        $iphones = $this->Products->find('all')
                                ->select()
                                ->where(['category' => 'iphone','total >' => 0])
                                ->order(['modified' => 'DESC']);
        $macbooks = $this->Products->find('all')
                                ->select()
                                ->where(['category' => 'macbook','total >' => 0])
                                ->order(['modified' => 'DESC']);
        $ipads = $this->Products->find('all')
                                ->select()
                                ->where(['category' => 'ipad','total >' => 0])
                                ->order(['modified' => 'DESC']);
        $watches = $this->Products->find('all')
                                ->select()
                                ->where(['category' => 'watch','total >' => 0])
                                ->order(['modified' => 'DESC']);
        $airpods = $this->Products->find('all')
                                ->select()
                                ->where(['category' => 'airpod','total >' => 0])
                                ->order(['modified' => 'DESC']);
        $this->set(['iphones' => $iphones,
                    'ipads' => $ipads,
                    'macbooks' => $macbooks,
                    'watches' => $watches,
                    'airpods' =>$airpods]);
    }

    public function detail($id = null){
        $product = $this->Products->find('all', ['contain' => 'Users'])
                                ->select()
                                ->where(['Products.id' => $id]);
        $this->set(['product' => $product]);
    }

    public function store(){
        $session = $this->getRequest()->getSession();
        if($session->check('User.id')){
            $user_id = $session->read('User.id');
            $product_list = $this->Products->find('all')
                                        ->select()
                                        ->where(['user_id' => $user_id]);
            $this->set(['products' => $product_list,'user_id' => $user_id]);
        }
    }

    public function userprofile(){
        $session = $this->getRequest()->getSession();
        if($session->check('User.id')){
            $user_id = $session->read('User.id');
            $user = $this->Users->find('all')
                                ->select()
                                ->where(['id' => $user_id]);
            $this->set(['user' => $user]);
        }
    }
}
