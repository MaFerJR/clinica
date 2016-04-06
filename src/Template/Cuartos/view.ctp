<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Cuarto'), ['action' => 'edit', $cuarto->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Cuarto'), ['action' => 'delete', $cuarto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cuarto->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Cuartos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cuarto'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="cuartos view large-9 medium-8 columns content">
    <h3><?= h($cuarto->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Nombre') ?></th>
            <td><?= h($cuarto->nombre) ?></td>
        </tr>
        <tr>
            <th><?= __('Notas') ?></th>
            <td><?= h($cuarto->notas) ?></td>
        </tr>
        <tr>
            <th><?= __('Disponible') ?></th>
            <td><?= h($cuarto->disponible) ?></td>
        </tr>
        <tr>
            <th><?= __('Motivo') ?></th>
            <td><?= h($cuarto->motivo) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($cuarto->id) ?></td>
        </tr>
    </table>
</div>
