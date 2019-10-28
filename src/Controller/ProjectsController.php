<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * Projects Controller
 *
 * @property \App\Model\Table\ProjectsTable $Projects
 *
 * @method \App\Model\Entity\Project[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProjectsController extends AppController {

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index() {
        $this->loadModel('ProjectsUsers');
        $projectsuser = $this->ProjectsUsers->find('list')->where(['user_id' => $this->Auth->user('id')])->toArray();

        $projects = $this->paginate($this->Projects->find()->where(['id IN' => $projectsuser]));

        $this->set(compact('projects'));
    }

    /**
     * View method
     *
     * @param string|null $id Project id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null) {
        $project = $this->Projects->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('project', $project);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add() {
        $project = $this->Projects->newEntity();
        if ($this->request->is('post')) {
            $post = $this->request->getData();
            $post['users']['_ids'][] = $this->Auth->user('id');
            $project = $this->Projects->patchEntity($project, $post);
            $project->status = 1;
            $project->last_update = new \DateTime();

            if ($this->Projects->save($project)) {
                $this->Flash->success(__('The project has been saved.'));

                return $this->redirect(['action' => 'index']);
            }


            $this->Flash->error(__('The project could not be saved. Please, try again.'));
        }
        $users = $this->Projects->Users->find('list', ['limit' => 200]);
        $this->set(compact('project', 'users'));
    }

    public function sources() {

        $this->loadModel('Users');
        $user = $this->Users->get($this->Auth->user('id'), ['contain' => ['Authentications.Services']]);

        $this->set(compact('user'));
    }

    public function repositories($auth_id) {
        $this->loadModel('Authentications');
        $auth = $this->Authentications->get($auth_id, ['contain' => 'Services']);
        $module = ucfirst($auth->service->module);

        $this->loadComponent($module);
        $repositories = $this->{$module}->getRepositories($auth->token);

        debug($repositories);
        exit;
    }

    /**
     * Edit method
     *
     * @param string|null $id Project id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null) {
        $project = $this->Projects->get($id, [
            'contain' => ['Users']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $project = $this->Projects->patchEntity($project, $this->request->getData());
            if ($this->Projects->save($project)) {
                $this->Flash->success(__('The project has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The project could not be saved. Please, try again.'));
        }
        $users = $this->Projects->Users->find('list', ['limit' => 200]);
        $this->set(compact('project', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Project id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $project = $this->Projects->get($id);
        if ($this->Projects->delete($project)) {
            $this->Flash->success(__('The project has been deleted.'));
        } else {
            $this->Flash->error(__('The project could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

}
