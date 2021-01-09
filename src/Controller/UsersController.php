<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Event\EventInterface;
use Cake\Http\Session;
/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{
    public function isUserSignIn(){
        $user = $this->getRequest()->getSession()->check('User.id');
        if($user){
            $this->redirect(['controller' => 'dashboards',
                            'action' => 'index']);
        } 
    }
    public function initialize(): void
    {
        parent::initialize();
        $this->loadComponent('Flash');
    }

    // public function beforeFilter(EventInterface $event)
    // {
    //     $this->isUserSignIn();
    // }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    // public function index()
    // {
    //     $users = $this->paginate($this->Users);
    //     $this->set(compact('users'));
    // }  

    public function signIn()
    {
        $this->isUserSignIn();
        $this->viewBuilder()->setLayout('sign_in');
        $session = $this->request->getSession();
        if($this->request->is('post')){
            if($this->request->getData('type') == "sign-in"){ 
                $sign_in = $this->Users->newEmptyEntity();
                $sign_in->email = $this->request->getData('email');  
                $sign_in->password = $this->request->getData('password');   
                
                // Check if user exist in database
                $data = $this->Users->find('all')
                                    ->select()
                                    ->where(['email' => $sign_in->email, 'password'=>$sign_in->password])
                                    ->toArray();
                // if exist
                if(0 !== count($data)){
                    $session->write([
                        'User.id' => $data[0]->id,
                        'User.name' => $data[0]->name,
                        'User.email' => $sign_in->email,
                        'User.role' => $data[0]->role
                    ]);
                    $this->redirect(['controller'=>'Dashboards','action'=>'index']);
                } else{
                    $this->Flash->error(__('Login fail !'));
                    $this->redirect(['controller'=>'Users','action'=>'sign_in']);
                }
            }
        }
    }

    public function logout(){
        $data = $this->request->getSession()->delete('User');
        $this->redirect(['controller'=>'Users',
                        'action'=>'sign_in']);
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['Products'],
        ]);

        $this->set(compact('user'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEmptyEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['controller'=>'Users','action' => 'sign_in']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
    }

    public function changePassword()
    {
        $id = $this->request->getSession()->read('User.id');
        $user = $this->Users->get($id, [
            'contain' => [],
        ]);
        if($this->request->is(['patch', 'post', 'put'])){
            $cur_pass = $this->request->getData('cur_pass');
            $new_pass = $this->request->getData('new_pass');
            $cf_pass = $this->request->getData('cf_pass');
            if($new_pass !== $cf_pass || $cur_pass != $user->password){      
                $this->Flash->error(__('Confirm password is difference from password or current password is wrong. Please try again'));     
                return $this->redirect(['controller' => 'dashboards', 'action' => 'userprofile']);
            } else {
                $user->password = $new_pass;
                if ($this->Users->save($user)) {
                    $this->Flash->success(__('New password has been saved.'));
                    return $this->redirect(['controller' => 'dashboards', 'action' => 'userprofile']);
                }
                $this->Flash->error(__('Something wrong!!!. Please try again.'));
            }
        }
     }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete()
    {
        $id = $this->request->getSession()->read('User.id');
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
            $data = $this->request->getSession()->delete('User');
            return $this->redirect(['controller' => 'users', 
                                    'action' => 'sign_in']);
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }
    }
}
