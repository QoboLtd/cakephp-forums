<?php
namespace Forum\Controller;

use Forum\Controller\AppController;

/**
 * ForumPosts Controller
 *
 * @property \Forum\Model\Table\ForumPostsTable $ForumPosts
 */
class ForumPostsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Forums', 'ForumTopics', 'Users']
        ];
        $forumPosts = $this->paginate($this->ForumPosts);

        $this->set(compact('forumPosts'));
        $this->set('_serialize', ['forumPosts']);
    }

    /**
     * View method
     *
     * @param string|null $id Forum Post id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $forumPost = $this->ForumPosts->get($id, [
            'contain' => ['Forums', 'ForumTopics', 'Users']
        ]);

        $this->set('forumPost', $forumPost);
        $this->set('_serialize', ['forumPost']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $forumPost = $this->ForumPosts->newEntity();
        if ($this->request->is('post')) {
            $forumPost = $this->ForumPosts->patchEntity($forumPost, $this->request->data);
            if ($this->ForumPosts->save($forumPost)) {
                $this->Flash->success(__('The forum post has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The forum post could not be saved. Please, try again.'));
            }
        }
        $forums = $this->ForumPosts->Forums->find('list', ['limit' => 200]);
        $forumTopics = $this->ForumPosts->ForumTopics->find('list', ['limit' => 200]);
        $users = $this->ForumPosts->Users->find('list', ['limit' => 200]);
        $this->set(compact('forumPost', 'forums', 'forumTopics', 'users'));
        $this->set('_serialize', ['forumPost']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Forum Post id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $forumPost = $this->ForumPosts->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $forumPost = $this->ForumPosts->patchEntity($forumPost, $this->request->data);
            if ($this->ForumPosts->save($forumPost)) {
                $this->Flash->success(__('The forum post has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The forum post could not be saved. Please, try again.'));
            }
        }
        $forums = $this->ForumPosts->Forums->find('list', ['limit' => 200]);
        $forumTopics = $this->ForumPosts->ForumTopics->find('list', ['limit' => 200]);
        $users = $this->ForumPosts->Users->find('list', ['limit' => 200]);
        $this->set(compact('forumPost', 'forums', 'forumTopics', 'users'));
        $this->set('_serialize', ['forumPost']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Forum Post id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $forumPost = $this->ForumPosts->get($id);
        if ($this->ForumPosts->delete($forumPost)) {
            $this->Flash->success(__('The forum post has been deleted.'));
        } else {
            $this->Flash->error(__('The forum post could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
