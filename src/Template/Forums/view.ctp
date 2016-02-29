<?php
$this->extend('QoboAdminPanel./Common/panel-wrapper');
$this->assign('title', __d('QoboAdminPanel', 'Forums'));
$this->assign('panel-title', __d('QoboAdminPanel', 'Forums information'));
?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($forum->name) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('Id') ?></td>
            <td><?= h($forum->id) ?></td>
        </tr>
        <tr>
            <td><?= __('Name') ?></td>
            <td><?= h($forum->name) ?></td>
        </tr>
        <tr>
            <td><?= __('Created') ?></td>
            <td><?= h($forum->created) ?></td>
        </tr>
        <tr>
            <td><?= __('Modified') ?></td>
            <td><?= h($forum->modified) ?></td>
        </tr>
    </table>
</div>

<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= __('Related ForumPosts') ?></h3>
    </div>
    <?php if (!empty($forum->forum_posts)): ?>
        <table class="table table-striped">
            <thead>
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Forum Id') ?></th>
                <th><?= __('Topic Id') ?></th>
                <th><?= __('User Id') ?></th>
                <th><?= __('Content') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($forum->forum_posts as $forumPosts): ?>
                <tr>
                    <td><?= h($forumPosts->id) ?></td>
                    <td><?= h($forumPosts->forum_id) ?></td>
                    <td><?= h($forumPosts->topic_id) ?></td>
                    <td><?= h($forumPosts->user_id) ?></td>
                    <td><?= h($forumPosts->content) ?></td>
                    <td><?= h($forumPosts->created) ?></td>
                    <td><?= h($forumPosts->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link('', ['controller' => 'ForumPosts', 'action' => 'view', $forumPosts->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                        <?= $this->Html->link('', ['controller' => 'ForumPosts', 'action' => 'edit', $forumPosts->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                        <?= $this->Form->postLink('', ['controller' => 'ForumPosts', 'action' => 'delete', $forumPosts->id], ['confirm' => __('Are you sure you want to delete # {0}?', $forumPosts->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p class="panel-body">no related ForumPosts</p>
    <?php endif; ?>
</div>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= __('Related ForumTopics') ?></h3>
    </div>
    <?php if (!empty($forum->forum_topics)): ?>
        <table class="table table-striped">
            <thead>
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Forum Id') ?></th>
                <th><?= __('User Id') ?></th>
                <th><?= __('Name') ?></th>
                <th><?= __('Content') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($forum->forum_topics as $forumTopics): ?>
                <tr>
                    <td><?= h($forumTopics->id) ?></td>
                    <td><?= h($forumTopics->forum_id) ?></td>
                    <td><?= h($forumTopics->user_id) ?></td>
                    <td><?= h($forumTopics->name) ?></td>
                    <td><?= h($forumTopics->content) ?></td>
                    <td><?= h($forumTopics->created) ?></td>
                    <td><?= h($forumTopics->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link('', ['controller' => 'ForumTopics', 'action' => 'view', $forumTopics->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                        <?= $this->Html->link('', ['controller' => 'ForumTopics', 'action' => 'edit', $forumTopics->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                        <?= $this->Form->postLink('', ['controller' => 'ForumTopics', 'action' => 'delete', $forumTopics->id], ['confirm' => __('Are you sure you want to delete # {0}?', $forumTopics->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p class="panel-body">no related ForumTopics</p>
    <?php endif; ?>
</div>
