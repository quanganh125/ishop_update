<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Http\Session;
/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $users = $this->paginate($this->Users);
        $this->set(compact('users'));
    }

    public function signIn()
    {
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
                        'User.id' => $data[0] ->user_id,
                        'User.name' => $data[0]->name,
                        'User.email' => $sign_in->email,
                    ]);
                    $this->redirect(['controller'=>'Dashboards','action'=>'index']);
                } else{
                    $this->Flash->error(__('Login fail !'));
                    $this->redirect(['controller'=>'Users','action'=>'signIn']);
                }
            }
        }
    }

    public function logout(){
        $data = $this->request->getSession();
        $data->destroy();
        $this->redirect(['controller'=>'Users',
                            'action'=>'signIn']);
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

                return $this->redirect(['controller'=>'Users','action' => 'signIn']);
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

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
