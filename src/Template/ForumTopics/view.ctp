<?php
$this->extend('QoboAdminPanel./Common/panel-wrapper');
$this->assign('title', __d('QoboAdminPanel', 'Topics'));
$this->assign('panel-title', __d('QoboAdminPanel', 'Topics information'));
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

