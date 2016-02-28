<?php
/* @var $this \Cake\View\View */
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('New Forum'), ['action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List ForumPosts'), ['controller' => 'ForumPosts', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Forum Post'), ['controller' => ' ForumPosts', 'action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List ForumTopics'), ['controller' => 'ForumTopics', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Forum Topic'), ['controller' => ' ForumTopics', 'action' => 'add']); ?></li>
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', '<ul class="nav nav-sidebar">' . $this->fetch('tb_actions') . '</ul>'); ?>

<table class="table table-striped" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id'); ?></th>
            <th><?= $this->Paginator->sort('name'); ?></th>
            <th><?= $this->Paginator->sort('created'); ?></th>
            <th><?= $this->Paginator->sort('modified'); ?></th>
            <th class="actions"><?= __('Actions'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($forums as $forum): ?>
        <tr>
            <td><?= h($forum->id) ?></td>
            <td><?= h($forum->name) ?></td>
            <td><?= h($forum->created) ?></td>
            <td><?= h($forum->modified) ?></td>
            <td class="actions">
                <?= $this->Html->link('', ['action' => 'view', $forum->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                <?= $this->Html->link('', ['action' => 'edit', $forum->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                <?= $this->Form->postLink('', ['action' => 'delete', $forum->id], ['confirm' => __('Are you sure you want to delete # {0}?', $forum->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
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