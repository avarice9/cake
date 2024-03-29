<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Permission $permission
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Permissions'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="permissions form large-9 medium-8 columns content">
    <?= $this->Form->create($permission) ?>
    <fieldset>
        <legend><?= __('Add Permission') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('code');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
