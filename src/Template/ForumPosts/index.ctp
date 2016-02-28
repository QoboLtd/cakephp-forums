<?php
$this->extend('QoboAdminPanel./Common/panel-wrapper');
$this->assign('title', __d('QoboAdminPanel', 'Posts'));
$this->assign('panel-title', __d('QoboAdminPanel', 'Posts information'));
?>
<p class="text-right">
    <?php echo $this->Html->link(
        __('Add New'),
        ['plugin' => $this->request->plugin, 'controller' => $this->request->controller, 'action' => 'add'],
        ['class' => 'btn btn-primary']
    ); ?>
</p>
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