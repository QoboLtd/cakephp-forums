<?php
namespace Forum\Controller;

use Forum\Controller\AppController;

/**
 * Forums Controller
 *
 * @property \Forum\Model\Table\ForumsTable $Forums
 */
class ForumsController extends AppController
{

    public function display()
    {
        $args = func_get_args();
        $topic = isset($args[0]) ? $args[0] : null;
        if (is_null($topic)) {
            return $this->redirect(['controller' => 'Forums', 'action' => 'add']);
        }
        $forum = $this->Forums->find('all')
            ->contain(['ForumTopics' => ['Users']])
            ->where(['name' => $topic])
            ->first();
        $this->set(compact('forum'));
    }

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $forums = $this->paginate($this->Forums);

        $this->set(compact('forums'));
        $this->set('_serialize', ['forums']);
    }

    /**
     * View method
     *
     * @param string|null $id Forum id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $forum = $this->Forums->get($id, [
            'contain' => ['ForumPosts', 'ForumTopics']
        ]);

        $this->set('forum', $forum);
        $this->set('_serialize', ['forum']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $forum = $this->Forums->newEntity();
        if ($this->request->is('post')) {
            $forum = $this->Forums->patchEntity($forum, $this->request->data);
            if ($this->Forums->save($forum)) {
                $this->Flash->success(__('The forum has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The forum could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('forum'));
        $this->set('_serialize', ['forum']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Forum id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $forum = $this->Forums->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $forum = $this->Forums->patchEntity($forum, $this->request->data);
            if ($this->Forums->save($forum)) {
                $this->Flash->success(__('The forum has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The forum could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('forum'));
        $this->set('_serialize', ['forum']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Forum id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $forum = $this->Forums->get($id);
        if ($this->Forums->delete($forum)) {
            $this->Flash->success(__('The forum has been deleted.'));
        } else {
            $this->Flash->error(__('The forum could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
