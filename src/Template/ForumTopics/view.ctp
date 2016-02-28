<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit Forum Topic'), ['action' => 'edit', $forumTopic->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Forum Topic'), ['action' => 'delete', $forumTopic->id], ['confirm' => __('Are you sure you want to delete # {0}?', $forumTopic->id)]) ?> </li>
<li><?= $this->Html->link(__('List Forum Topics'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Forum Topic'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Forums'), ['controller' => 'Forums', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Forum'), ['controller' => 'Forums', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<li><?= $this->Html->link(__('Edit Forum Topic'), ['action' => 'edit', $forumTopic->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Forum Topic'), ['action' => 'delete', $forumTopic->id], ['confirm' => __('Are you sure you want to delete # {0}?', $forumTopic->id)]) ?> </li>
<li><?= $this->Html->link(__('List Forum Topics'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Forum Topic'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Forums'), ['controller' => 'Forums', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Forum'), ['controller' => 'Forums', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($forumTopic->name) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('Id') ?></td>
            <td><?= h($forumTopic->id) ?></td>
        </tr>
        <tr>
            <td><?= __('Forum') ?></td>
            <td><?= $forumTopic->has('forum') ? $this->Html->link($forumTopic->forum->name, ['controller' => 'Forums', 'action' => 'view', $forumTopic->forum->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('User') ?></td>
            <td><?= $forumTopic->has('user') ? $this->Html->link($forumTopic->user->id, ['controller' => 'Users', 'action' => 'view', $forumTopic->user->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Name') ?></td>
            <td><?= h($forumTopic->name) ?></td>
        </tr>
        <tr>
            <td><?= __('Created') ?></td>
            <td><?= h($forumTopic->created) ?></td>
        </tr>
        <tr>
            <td><?= __('Modified') ?></td>
            <td><?= h($forumTopic->modified) ?></td>
        </tr>
        <tr>
            <td><?= __('Content') ?></td>
            <td><?= $this->Text->autoParagraph(h($forumTopic->content)); ?></td>
        </tr>
    </table>
</div>

