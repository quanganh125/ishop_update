<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Orders Controller
 *
 * @property \App\Model\Table\OrdersTable $Orders
 * @method \App\Model\Entity\Order[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class OrdersController extends AppController
{
    public function initialize(): void
    {
        parent::initialize();
        $this->loadComponent('Paginator');
        $this->loadComponent('Flash');
        $this->loadModel('Products'); 
        $this->loadModel('Users'); 
        $this->loadModel('Statuses'); 
        $this->viewBuilder()->setLayout('home'); 
    }
    
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function purchase()
    {
        $this->paginate = [
            'contain' => ['Products', 'Users', 'Statuses'],
            // 'maxLimit' => 10
        ];
        $user_id = $this->request->getSession()->read('User.id'); 
        $pending_orders = $this->paginate($this->Orders->findByStatusId(1)
                                                    ->select()
                                                    ->where(['customer_id' => $user_id])
                                                    ->order(['created' => 'DESC']));

        $delivered_orders = $this->paginate($this->Orders->findByStatusId(2)
                                                        ->select()
                                                        ->where(['customer_id' => $user_id])
                                                        ->order(['created' => 'DESC']));
        $success_orders = $this->paginate($this->Orders->findByStatusId(3)
                                                        ->select()
                                                        ->where(['customer_id' => $user_id])
                                                        ->order(['created' => 'DESC']));
        $cancelled_orders = $this->paginate($this->Orders->findByStatusId(4)
                                                        ->select()
                                                        ->where(['customer_id' => $user_id])
                                                        ->order(['created' => 'DESC']));

        $this->set(compact('pending_orders','delivered_orders','success_orders','cancelled_orders'));
    }

    public function sales()
    {
        $this->paginate = [
            'contain' => ['Products', 'Users', 'Statuses'],
            // 'maxLimit' => 10
        ];
        $user_id = $this->request->getSession()->read('User.id'); 
        $pending_orders = $this->paginate($this->Orders->findByStatusId(1)
                                                    ->select()
                                                    ->where(['Products.user_id' => $user_id])
                                                    ->order(['created' => 'DESC']));

        $delivered_orders = $this->paginate($this->Orders->findByStatusId(2)
                                                        ->select()
                                                        ->where(['Products.user_id' => $user_id])
                                                        ->order(['created' => 'DESC']));
        $success_orders = $this->paginate($this->Orders->findByStatusId(3)
                                                        ->select()
                                                        ->where(['Products.user_id' => $user_id])
                                                        ->order(['created' => 'DESC']));
        $cancelled_orders = $this->paginate($this->Orders->findByStatusId(4)
                                                        ->select()
                                                        ->where(['Products.user_id' => $user_id])
                                                        ->order(['created' => 'DESC']));

        $this->set(compact('pending_orders','delivered_orders','success_orders','cancelled_orders'));
    }

    public function customerCancel($id = null)
    {
        $order = $this->Orders->get($id, [
            'contain' => [],
        ]);
        $order->status_id = 4;
        $order->description = "This order has been cancelled by cutomer";

        if ($this->request->is(['patch', 'post', 'put'])) {
       
            if ($this->Orders->save($order)) {
                $this->Flash->success(__('The order has been cancelled.'));

                return $this->redirect(['action' => 'purchase']);
            }
            $this->Flash->error(__('The order could not be cancelled. Please, try again.'));
        }
    }

    public function sellerReject($id = null)
    {
        $order = $this->Orders->get($id, [
            'contain' => [],
        ]);
        $order->status_id = 4;
        $order->description = "This order has been rejected by seller";

        if ($this->request->is(['patch', 'post', 'put'])) {
       
            if ($this->Orders->save($order)) {
                $this->Flash->success(__('The order has been rejected.'));

                return $this->redirect(['action' => 'sales']);
            }
            $this->Flash->error(__('The order could not be rejected. Please, try again.'));
        }
    }

    public function sellerAccept($id = null)
    {
        $order = $this->Orders->get($id, [
            'contain' => [],
        ]);
        $product = $this->Products->findById($order->product_id)->firstOrFail();
        
        $order->status_id = 2;
        $order->description = "This order is being delierved";
        $product->total -= $order->quantity;

        if ($this->request->is(['patch', 'post', 'put'])) {
            if ($this->Orders->save($order) && $this->Products->save($product)) {
                $this->Flash->success(__('This order is being delierved.'));

                return $this->redirect(['action' => 'sales']);
            }
            $this->Flash->error(__('The order could not be changed. Please, try again.'));
        }
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $order = $this->Orders->newEmptyEntity();
        if ($this->request->is('post')) {
            $order = $this->Orders->patchEntity($order, $this->request->getData());   
            if ($this->Orders->save($order)) {
                $this->Flash->success(__('The order has been saved.'));

                return $this->redirect(['action' => 'purchase']);
            }
            $this->Flash->error(__('The order could not be saved. Please, try again.'));
        }
        $products = $this->Orders->Products->find('list', ['limit' => 200]);
        $users = $this->Orders->Users->find('list', ['limit' => 200]);
        $statuses = $this->Orders->Statuses->find('list', ['limit' => 200]);
        $this->set(compact('order', 'products', 'users', 'statuses'));
    }

    // /**
    //  * Edit method
    //  *
    //  * @param string|null $id Order id.
    //  * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
    //  * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
    //  */
    // public function edit($id = null)
    // {
    //     $order = $this->Orders->get($id, [
    //         'contain' => [],
    //     ]);
    //     if ($this->request->is(['patch', 'post', 'put'])) {
    //         $order = $this->Orders->patchEntity($order, $this->request->getData());
    //         if ($this->Orders->save($order)) {
    //             $this->Flash->success(__('The order has been saved.'));

    //             return $this->redirect(['action' => 'index']);
    //         }
    //         $this->Flash->error(__('The order could not be saved. Please, try again.'));
    //     }
    //     $products = $this->Orders->Products->find('list', ['limit' => 200]);
    //     $users = $this->Orders->Users->find('list', ['limit' => 200]);
    //     $statuses = $this->Orders->Statuses->find('list', ['limit' => 200]);
    //     $this->set(compact('order', 'products', 'users', 'statuses'));
    // }

    //     /**
    //  * View method
    //  *
    //  * @param string|null $id Order id.
    //  * @return \Cake\Http\Response|null|void Renders view
    //  * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
    //  */
    // public function view($id = null)
    // {
    //     $order = $this->Orders->get($id, [
    //         'contain' => ['Products', 'Users', 'Statuses'],
    //     ]);

    //     $this->set(compact('order'));
    // }

    // /**
    //  * Delete method
    //  *
    //  * @param string|null $id Order id.
    //  * @return \Cake\Http\Response|null|void Redirects to index.
    //  * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
    //  */
    // public function delete($id = null)
    // {
    //     $this->request->allowMethod(['post', 'delete']);
    //     $order = $this->Orders->get($id);
    //     if ($this->Orders->delete($order)) {
    //         $this->Flash->success(__('The order has been deleted.'));
    //     } else {
    //         $this->Flash->error(__('The order could not be deleted. Please, try again.'));
    //     }

    //     return $this->redirect(['action' => 'index']);
    // }
}
