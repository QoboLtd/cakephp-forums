<?php
$this->extend('QoboAdminPanel./Common/panel-wrapper');
$this->assign('title', __d('QoboAdminPanel', 'Forums'));
$this->assign('panel-title', __d('QoboAdminPanel', 'Forums information'));
?>
<?= $this->Form->create($forum); ?>
<fieldset>
    <legend><?= __('Edit {0}', ['Forum']) ?></legend>
    <?php
    echo $this->Form->input('name');
    ?>
</fieldset>
<?= $this->Form->button(__("Save")); ?>
<?= $this->Form->end() ?>
