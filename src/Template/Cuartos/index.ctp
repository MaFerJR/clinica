
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Cuarto'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="cuartos index large-9 medium-8 columns content">
    <h3><?= __('Cuartos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('nombre') ?></th>
                <th><?= $this->Paginator->sort('notas') ?></th>
                <th><?= $this->Paginator->sort('disponible') ?></th>
                <th><?= $this->Paginator->sort('motivo') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cuartos as $cuarto): ?>
            <tr>
                <td><?= $this->Number->format($cuarto->id) ?></td>
                <td><?= h($cuarto->nombre) ?></td>
                <td><?= h($cuarto->notas) ?></td>
                <td><?= h($cuarto->disponible) ?></td>
                <td><?= h($cuarto->motivo) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $cuarto->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $cuarto->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $cuarto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cuarto->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
