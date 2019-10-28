<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Authentications Controller
 *
 * @property \App\Model\Table\AuthenticationsTable $Authentications
 *
 * @method \App\Model\Entity\Authentication[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AuthenticationsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Services']
        ];
        $authentications = $this->paginate($this->Authentications);

        $this->set(compact('authentications'));
    }

    /**
     * View method
     *
     * @param string|null $id Authentication id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $authentication = $this->Authentications->get($id, [
            'contain' => ['Users', 'Services']
        ]);

        $this->set('authentication', $authentication);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $authentication = $this->Authentications->newEntity();
        if ($this->request->is('post')) {
            $authentication = $this->Authentications->patchEntity($authentication, $this->request->getData());
            if ($this->Authentications->save($authentication)) {
                $this->Flash->success(__('The authentication has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The authentication could not be saved. Please, try again.'));
        }
        $services = $this->Authentications->Services->find(null, ['limit' => 200]);
        $this->set(compact('authentication', 'users', 'services'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Authentication id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $authentication = $this->Authentications->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $authentication = $this->Authentications->patchEntity($authentication, $this->request->getData());
            if ($this->Authentications->save($authentication)) {
                $this->Flash->success(__('The authentication has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The authentication could not be saved. Please, try again.'));
        }
        $users = $this->Authentications->Users->find('list', ['limit' => 200]);
        $services = $this->Authentications->Services->find('list', ['limit' => 200]);
        $this->set(compact('authentication', 'users', 'services'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Authentication id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $authentication = $this->Authentications->get($id);
        if ($this->Authentications->delete($authentication)) {
            $this->Flash->success(__('The authentication has been deleted.'));
        } else {
            $this->Flash->error(__('The authentication could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
