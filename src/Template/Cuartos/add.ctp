<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Cuartos'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="cuartos form large-9 medium-8 columns content">
    <?= $this->Form->create($cuarto) ?>
    <fieldset>
        <legend><?= __('Add Cuarto') ?></legend>
        <?php
            echo $this->Form->input('nombre');
            echo $this->Form->input('notas');
            echo $this->Form->input('disponible');
            echo $this->Form->input('motivo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
