<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('List Forums'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Forum Posts'), ['controller' => 'ForumPosts', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Forum Post'), ['controller' => 'ForumPosts', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Forum Topics'), ['controller' => 'ForumTopics', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Forum Topic'), ['controller' => 'ForumTopics', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?= $this->Html->link(__('List Forums'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Forum Posts'), ['controller' => 'ForumPosts', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Forum Post'), ['controller' => 'ForumPosts', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Forum Topics'), ['controller' => 'ForumTopics', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Forum Topic'), ['controller' => 'ForumTopics', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($forum); ?>
<fieldset>
    <legend><?= __('Add {0}', ['Forum']) ?></legend>
    <?php
    echo $this->Form->input('name');
    ?>
</fieldset>
<?= $this->Form->button(__("Add")); ?>
<?= $this->Form->end() ?>
