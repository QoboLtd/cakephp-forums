<?php
$this->extend('QoboAdminPanel./Common/panel-wrapper');
$this->assign('title', __d('QoboAdminPanel', 'Topics'));
$this->assign('panel-title', __d('QoboAdminPanel', 'Topics information'));
?>
<?= $this->Form->create($forumTopic); ?>
<fieldset>
    <legend><?= __('Edit {0}', ['Forum Topic']) ?></legend>
    <?php
    echo $this->Form->input('forum_id', ['options' => $forums]);
    echo $this->Form->input('user_id', ['options' => $users]);
    echo $this->Form->input('name');
    echo $this->Form->input('content');
    ?>
</fieldset>
<?= $this->Form->button(__("Save")); ?>
<?= $this->Form->end() ?>
