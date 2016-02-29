<?php
$this->extend('QoboAdminPanel./Common/panel-wrapper');
$this->assign('title', __d('QoboAdminPanel', 'Posts'));
$this->assign('panel-title', __d('QoboAdminPanel', 'Posts information'));
?>
<?= $this->Form->create($forumPost); ?>
<fieldset>
    <legend><?= __('Edit {0}', ['Forum Post']) ?></legend>
    <?php
    echo $this->Form->input('forum_id', ['options' => $forums]);
    echo $this->Form->input('topic_id', ['options' => $forumTopics]);
    echo $this->Form->input('user_id', ['options' => $users]);
    echo $this->Form->input('content', ['type' => 'textarea', 'id' => 'editor1']);
    ?>
</fieldset>
<?= $this->Form->button(__("Save")); ?>
<?= $this->Form->end() ?>
