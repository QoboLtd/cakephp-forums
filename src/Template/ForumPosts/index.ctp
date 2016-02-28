<?php
/* @var $this \Cake\View\View */
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('New Forum Post'), ['action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Forums'), ['controller' => 'Forums', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Forum'), ['controller' => ' Forums', 'action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List ForumTopics'), ['controller' => 'ForumTopics', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Forum Topic'), ['controller' => ' ForumTopics', 'action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New User'), ['controller' => ' Users', 'action' => 'add']); ?></li>
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', '<ul class="nav nav-sidebar">' . $this->fetch('tb_actions') . '</ul>'); ?>

<table class="table table-striped" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id'); ?></th>
            <th><?= $this->Paginator->sort('forum_id'); ?></th>
            <th><?= $this->Paginator->sort('topic_id'); ?></th>
            <th><?= $this->Paginator->sort('user_id'); ?></th>
            <th><?= $this->Paginator->sort('created'); ?></th>
            <th><?= $this->Paginator->sort('modified'); ?></th>
            <th class="actions"><?= __('Actions'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($forumPosts as $forumPost): ?>
        <tr>
            <td><?= h($forumPost->id) ?></td>
            <td>
                <?= $forumPost->has('forum') ? $this->Html->link($forumPost->forum->name, ['controller' => 'Forums', 'action' => 'view', $forumPost->forum->id]) : '' ?>
            </td>
            <td>
                <?= $forumPost->has('forum_topic') ? $this->Html->link($forumPost->forum_topic->name, ['controller' => 'ForumTopics', 'action' => 'view', $forumPost->forum_topic->id]) : '' ?>
            </td>
            <td>
                <?= $forumPost->has('user') ? $this->Html->link($forumPost->user->id, ['controller' => 'Users', 'action' => 'view', $forumPost->user->id]) : '' ?>
            </td>
            <td><?= h($forumPost->created) ?></td>
            <td><?= h($forumPost->modified) ?></td>
            <td class="actions">
                <?= $this->Html->link('', ['action' => 'view', $forumPost->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                <?= $this->Html->link('', ['action' => 'edit', $forumPost->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                <?= $this->Form->postLink('', ['action' => 'delete', $forumPost->id], ['confirm' => __('Are you sure you want to delete # {0}?', $forumPost->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<div class="paginator">
    <ul class="pagination">
        <?= $this->Paginator->prev('< ' . __('previous')) ?>
        <?= $this->Paginator->numbers(['before' => '', 'after' => '']) ?>
        <?= $this->Paginator->next(__('next') . ' >') ?>
    </ul>
    <p><?= $this->Paginator->counter() ?></p>
</div>