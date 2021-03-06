<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Paciente'), ['action' => 'edit', $paciente->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Paciente'), ['action' => 'delete', $paciente->id], ['confirm' => __('Are you sure you want to delete # {0}?', $paciente->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Pacientes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Paciente'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="pacientes view large-9 medium-8 columns content">
    <h3><?= h($paciente->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Nombre') ?></th>
            <td><?= h($paciente->nombre) ?></td>
        </tr>
        <tr>
            <th><?= __('ApellidoPaterno') ?></th>
            <td><?= h($paciente->apellidoPaterno) ?></td>
        </tr>
        <tr>
            <th><?= __('ApellidoMaterno') ?></th>
            <td><?= h($paciente->apellidoMaterno) ?></td>
        </tr>
        <tr>
            <th><?= __('Uuid') ?></th>
            <td><?= h($paciente->uuid) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($paciente->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Edad') ?></th>
            <td><?= $this->Number->format($paciente->edad) ?></td>
        </tr>
    </table>
</div>
