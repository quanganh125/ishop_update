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
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->viewBuilder()->setLayout('home');  
    }
}
