<?php
/* @var $this \Cake\View\View */
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('New Forum Topic'), ['action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Forums'), ['controller' => 'Forums', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Forum'), ['controller' => ' Forums', 'action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New User'), ['controller' => ' Users', 'action' => 'add']); ?></li>
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', '<ul class="nav nav-sidebar">' . $this->fetch('tb_actions') . '</ul>'); ?>

<table class="table table-striped" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id'); ?></th>
            <th><?= $this->Paginator->sort('forum_id'); ?></th>
            <th><?= $this->Paginator->sort('user_id'); ?></th>
            <th><?= $this->Paginator->sort('name'); ?></th>
            <th><?= $this->Paginator->sort('created'); ?></th>
            <th><?= $this->Paginator->sort('modified'); ?></th>
            <th class="actions"><?= __('Actions'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($forumTopics as $forumTopic): ?>
        <tr>
            <td><?= h($forumTopic->id) ?></td>
            <td>
                <?= $forumTopic->has('forum') ? $this->Html->link($forumTopic->forum->name, ['controller' => 'Forums', 'action' => 'view', $forumTopic->forum->id]) : '' ?>
            </td>
            <td>
                <?= $forumTopic->has('user') ? $this->Html->link($forumTopic->user->id, ['controller' => 'Users', 'action' => 'view', $forumTopic->user->id]) : '' ?>
            </td>
            <td><?= h($forumTopic->name) ?></td>
            <td><?= h($forumTopic->created) ?></td>
            <td><?= h($forumTopic->modified) ?></td>
            <td class="actions">
                <?= $this->Html->link('', ['action' => 'view', $forumTopic->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                <?= $this->Html->link('', ['action' => 'edit', $forumTopic->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                <?= $this->Form->postLink('', ['action' => 'delete', $forumTopic->id], ['confirm' => __('Are you sure you want to delete # {0}?', $forumTopic->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
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