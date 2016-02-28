<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit Forum Post'), ['action' => 'edit', $forumPost->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Forum Post'), ['action' => 'delete', $forumPost->id], ['confirm' => __('Are you sure you want to delete # {0}?', $forumPost->id)]) ?> </li>
<li><?= $this->Html->link(__('List Forum Posts'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Forum Post'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Forums'), ['controller' => 'Forums', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Forum'), ['controller' => 'Forums', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Forum Topics'), ['controller' => 'ForumTopics', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Forum Topic'), ['controller' => 'ForumTopics', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<li><?= $this->Html->link(__('Edit Forum Post'), ['action' => 'edit', $forumPost->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Forum Post'), ['action' => 'delete', $forumPost->id], ['confirm' => __('Are you sure you want to delete # {0}?', $forumPost->id)]) ?> </li>
<li><?= $this->Html->link(__('List Forum Posts'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Forum Post'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Forums'), ['controller' => 'Forums', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Forum'), ['controller' => 'Forums', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Forum Topics'), ['controller' => 'ForumTopics', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Forum Topic'), ['controller' => 'ForumTopics', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($forumPost->id) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('Id') ?></td>
            <td><?= h($forumPost->id) ?></td>
        </tr>
        <tr>
            <td><?= __('Forum') ?></td>
            <td><?= $forumPost->has('forum') ? $this->Html->link($forumPost->forum->name, ['controller' => 'Forums', 'action' => 'view', $forumPost->forum->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Forum Topic') ?></td>
            <td><?= $forumPost->has('forum_topic') ? $this->Html->link($forumPost->forum_topic->name, ['controller' => 'ForumTopics', 'action' => 'view', $forumPost->forum_topic->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('User') ?></td>
            <td><?= $forumPost->has('user') ? $this->Html->link($forumPost->user->id, ['controller' => 'Users', 'action' => 'view', $forumPost->user->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Created') ?></td>
            <td><?= h($forumPost->created) ?></td>
        </tr>
        <tr>
            <td><?= __('Modified') ?></td>
            <td><?= h($forumPost->modified) ?></td>
        </tr>
        <tr>
            <td><?= __('Content') ?></td>
            <td><?= $this->Text->autoParagraph(h($forumPost->content)); ?></td>
        </tr>
    </table>
</div>

