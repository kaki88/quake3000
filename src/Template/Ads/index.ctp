<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Ad'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Areas'), ['controller' => 'Areas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Area'), ['controller' => 'Areas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Type Ads'), ['controller' => 'TypeAds', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Type Ad'), ['controller' => 'TypeAds', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Towns'), ['controller' => 'Towns', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Town'), ['controller' => 'Towns', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Images'), ['controller' => 'Images', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Image'), ['controller' => 'Images', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Messages'), ['controller' => 'Messages', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Message'), ['controller' => 'Messages', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="ads index large-9 medium-8 columns content">
    <h3><?= __('Ads') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('user_id') ?></th>
                <th><?= $this->Paginator->sort('type_ad_id') ?></th>
                <th><?= $this->Paginator->sort('is_active') ?></th>
                <th><?= $this->Paginator->sort('for_sale') ?></th>
                <th><?= $this->Paginator->sort('for_rent') ?></th>
                <th><?= $this->Paginator->sort('price') ?></th>
                <th><?= $this->Paginator->sort('price_info') ?></th>
                <th><?= $this->Paginator->sort('surface') ?></th>
                <th><?= $this->Paginator->sort('is_divisible') ?></th>
                <th><?= $this->Paginator->sort('town_id') ?></th>
                <th><?= $this->Paginator->sort('latitude') ?></th>
                <th><?= $this->Paginator->sort('longitude') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ads as $ad): ?>
            <tr>
                <td><?= $this->Number->format($ad->id) ?></td>
                <td><?= $ad->has('user') ? $this->Html->link($ad->user->id, ['controller' => 'Users', 'action' => 'view', $ad->user->id]) : '' ?></td>
                <td><?= $ad->has('type_ad') ? $this->Html->link($ad->type_ad->type_name, ['controller' => 'TypeAds', 'action' => 'view', $ad->type_ad->id]) : '' ?></td>
                <td><?= h($ad->is_active) ?></td>
                <td><?= h($ad->for_sale) ?></td>
                <td><?= h($ad->for_rent) ?></td>
                <td><?= $this->Number->format($ad->price) ?></td>
                <td><?= h($ad->price_info) ?></td>
                <td><?= $this->Number->format($ad->surface) ?></td>
                <td><?= h($ad->is_divisible) ?></td>
                <td><?= $ad->has('town') ? $this->Html->link($ad->town->town_name, ['controller' => 'Towns', 'action' => 'view', $ad->town->id]) : '' ?></td>
                <td><?= $this->Number->format($ad->latitude) ?></td>
                <td><?= $this->Number->format($ad->longitude) ?></td>
                <td><?= h($ad->created) ?></td>
                <td><?= h($ad->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $ad->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ad->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ad->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ad->id)]) ?>
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
