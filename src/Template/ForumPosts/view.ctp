<?php
$this->extend('QoboAdminPanel./Common/panel-wrapper');
$this->assign('title', __d('QoboAdminPanel', 'Posts'));
$this->assign('panel-title', __d('QoboAdminPanel', 'Posts information'));
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

